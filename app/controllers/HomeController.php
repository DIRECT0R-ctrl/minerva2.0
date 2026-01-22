<?php 
declare(strict_types=1);
require_once __DIR__ . '/../core\Controller.php';

class HomeController extends Controller 
{
	public function index()
	{
		$this->view('home');
	}
}
?>
