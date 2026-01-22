<?php
declare(strict_types=1);

require_once __DIR__ . '/../core/Database.php';

final class GradeRepository
{
    private PDO $db;

    public function __construct(array $config)
    {
        $this->db = Database::getInstance($config)->getConnection();
    }

    public function save(int $submissionId, float $grade, string $comment): bool
    {
        $sql = "INSERT INTO grades (submission_id, grade, comment)
                VALUES (?, ?, ?)";

        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$submissionId, $grade, $comment]);
    }

    public function findByStudent(int $studentId): array
    {
        $sql = "
            SELECT g.grade, g.comment, w.title
            FROM grades g
            JOIN submissions s ON g.submission_id = s.id
            JOIN works w ON s.work_id = w.id
            WHERE s.student_id = ?
        ";

        $stmt = $this->db->prepare($sql);
        $stmt->execute([$studentId]);
        return $stmt->fetchAll();
    }
}
