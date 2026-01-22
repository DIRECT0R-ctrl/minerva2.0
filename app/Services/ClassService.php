<?php
require_once __DIR__ . '/../core/Database.php';


class ClassService
{
    
    private $db;

    public function __construct()
    {
         $this->db = Database::getInstance($config)->getConnection();
    }

    public function createClass($name, $teacherId)
    {
        $sql = "INSERT INTO classes (name, teacher_id) VALUES (?, ?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$name, $teacherId]);
    }

    public function getClassesByTeacher($teacherId)
    {
        $sql = "SELECT * FROM classes WHERE teacher_id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$teacherId]);
       return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
