<?php
declare(strict_types=1);

require_once __DIR__ . '/../repositories/UserRepository.php';

final class AuthService
{
    private UserRepository $users;

    public function __construct(array $config)
    {
        $this->users = new UserRepository($config);
    }

    public function login(string $email, string $password): bool
    {
        $user = $this->users->findByEmail($email);
        if (!$user) return false;

        if (!password_verify($password, $user['password_hash'])) {
            return false;
        }

        $_SESSION['user_id'] = (int)$user['id'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['fullname'] = $user['fullname'];

        return true;
    }

    public function logout(): void
    {
        $_SESSION = [];
        if (session_id() !== '') {
            session_destroy();
        }
    }

    public function requireRole(string $role): void
    {
        if (empty($_SESSION['user_id']) || empty($_SESSION['role'])) {
            header("Location: /login");
            exit;
        }
        if ($_SESSION['role'] !== $role) {
            http_response_code(403);
            echo "403 Forbidden";
            exit;
        }
    }
}
