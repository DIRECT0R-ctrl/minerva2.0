<?php
class SubmissionRepository
{
    private PDO $db;

    public function __construct(array $config)
    {
        $this->db = Database::getInstance($config)->getConnection();
    }

    public function save($workId, $studentId, $content)
    {
        $stmt = $this->db->prepare(
            "INSERT INTO submissions (work_id, student_id, content)
             VALUES (?, ?, ?)"
        );
        $stmt->execute([$workId, $studentId, $content]);
    }
}
