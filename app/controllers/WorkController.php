<?php
require_once __DIR__ . '/../services/WorkService.php';

class WorkController
{
    private $workService;

    public function __construct()
    {
        $this->workService = new WorkService();
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->workService->createWork(
                $_POST['title'],
                $_POST['description'],
                $_POST['class_id']
            );

            header("Location: dashboard_teacher.php");
        }
    }
}
