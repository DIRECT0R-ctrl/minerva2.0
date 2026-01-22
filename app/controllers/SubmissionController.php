<?php
require_once __DIR__ ."/../core/Controller.php";

  class SubmissionController extends Controller
{
    private SubmissionService $service;

    public function __construct(array $config)
    {
        $this->service = new SubmissionService($config);
    }

    public function submit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->service->submitWork(
                $_POST['work_id'],
                $_SESSION['user_id'],
                $_POST['content']
            );
            header("Location: /mes-travaux");
        }

        $this->view('student_submit_work');
    }
}
