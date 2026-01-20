<?php
declare(strict_types=1);

require_once __DIR__ . '/../core/Controller.php';
require_once __DIR__ . '/../services/AuthService.php';

final class AuthController extends Controller
{
    private AuthService $auth;

    public function __construct(array $config)
    {
        parent::__construct($config);
        $this->auth = new AuthService($config);
    }

    public function showLogin(): void
    {
        $error = $_GET['error'] ?? null;
        $this->view('auth/login', ['error' => $error]);
    }

    public function login(): void
    {
        $email = trim($_POST['email'] ?? '');
        $password = (string)($_POST['password'] ?? '');

        if ($email === '' || $password === '') {
            header("Location: /login?error=missing");
            exit;
        }

        if (!$this->auth->login($email, $password)) {
            header("Location: /login?error=invalid");
            exit;
        }

        // Redirect by role
        if ($_SESSION['role'] === 'teacher') {
            header("Location: /teacher/dashboard");
            exit;
        }

        header("Location: /student/dashboard");
        exit;
    }

    public function logout(): void
    {
        $this->auth->logout();
        header("Location: /login");
        exit;
    }
}
