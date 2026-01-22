<?php
declare(strict_types=1);

require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../services/AuthService.php';

final class TeacherController extends Controller
{
    private AuthService $auth;

    public function __construct(array $config)
    {
        parent::__construct($config);
        $this->auth = new AuthService($config);
    }

    public function dashboard(): void
    {
        $this->auth->requireRole('teacher');
        $this->view('teacher/dashboard', [
            'fullname' => $_SESSION['fullname'] ?? 'Teacher'
        ]);
    }
}
