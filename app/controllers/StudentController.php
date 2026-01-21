<?php
declare(strict_types=1);

require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../services/AuthService.php';

final class StudentController extends Controller
{
    private AuthService $auth;

    public function __construct(array $config)
    {
        parent::__construct($config);
        $this->auth = new AuthService($config);
    }

    public function dashboard(): void
    {
        $this->auth->requireRole('student');
        $this->view('student/dashboard', [
            'fullname' => $_SESSION['fullname'] ?? 'Student'
        ]);
    }
}
