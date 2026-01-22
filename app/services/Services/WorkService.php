<?php
require_once __DIR__ . '/../core/Database.php';

class WorkService
{
    private $db;

    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }

    public function createWork($title, $description, $classId)
    {
        $sql = "INSERT INTO works (title, description, class_id)
                VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$title, $description, $classId]);
    }

    public function getWorksByClass($classId)
    {
        $sql = "SELECT * FROM works WHERE class_id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$classId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
