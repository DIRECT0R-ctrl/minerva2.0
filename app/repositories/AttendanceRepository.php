<?php
declare(strict_types=1);

require_once __DIR__ . '/../core/Database.php';

final class AttendanceRepository
{
    private PDO $db;

    public function __construct(array $config)
    {
        $this->db = Database::getInstance($config)->getConnection();
    }

    public function save(
        int $studentId,
        int $classId,
        string $date,
        string $status
    ): bool {
        $sql = "INSERT INTO attendance (student_id, class_id, date, status)
                VALUES (?, ?, ?, ?)";

        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$studentId, $classId, $date, $status]);
    }

    public function getByStudent(int $studentId): array
    {
        $sql = "SELECT * FROM attendance WHERE student_id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$studentId]);
        return $stmt->fetchAll();
    }
}
