<?php
require_once __DIR__ . '/../services/ClassService.php';

class ClassController
{
    private $classService;

    public function __construct()
    {
        $this->classService = new ClassService();
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $teacherId = $_SESSION['user_id'];

            $this->classService->createClass($name, $teacherId);
            header("Location: dashboard_teacher.php");
        }
    }
}
