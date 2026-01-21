<?php
declare(strict_types=1);

require_once __DIR__ . '/../core/Database.php';

final class UserRepository
{
    private \PDO $pdo;

    public function __construct(array $config)
    {
        $this->pdo = Database::getInstance($config)->getConnection(); 
    }

    public function findByEmail(string $email): ?array
    {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch();
        return $user ?: null;
    }

    public function create(string $fullname, string $email, string $passwordHash, string $role): int
    {
        $stmt = $this->pdo->prepare("
            INSERT INTO users (fullname, email, password_hash, role)
            VALUES (:fullname, :email, :password_hash, :role)
            RETURNING id
        ");
        $stmt->execute([
            'fullname' => $fullname,
            'email' => $email,
            'password_hash' => $passwordHash,
            'role' => $role,
        ]);

        return (int)$stmt->fetchColumn();
    }
}
