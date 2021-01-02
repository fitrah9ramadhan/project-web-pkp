<?php 

namespace App\Controllers;
use App\Models\LoginModel;

class AdminLogin extends BaseController
{
	public function __construct()
	{
		$this->loginModel = new \App\Models\LoginModel();
	}

	public function index()
	{

		if (isset($_SESSION['login'])){
			header('Location: admin/index');
			exit;
		}


		$data = [

			'title' => 'Halaman Login Admin'
		];
		return view('login/index', $data);


	}

	public function login(){

		$data = [
			'title' => 'Halaman Admin'
		];

		$user = $this->loginModel->getLogin();

		$inputDariHalaman = [
			'username' => $this->request->getVar('username'),
			'password' => $this->request->getVar('password'),
		];

		foreach ($user as $epsilon) {
			if ($inputDariHalaman['username'] == $epsilon['username'] & $inputDariHalaman['password'] == $epsilon['password']) {
						$_SESSION['login'] = true;
						return view('/admin/index', $data);
			}else{echo "Salah";}
		}

	}

	public function logout(){
		session_destroy();
		$data = [
			'title' => 'Halaman Utama',

		];
		

		return view('login/index', $data);
	}
}

