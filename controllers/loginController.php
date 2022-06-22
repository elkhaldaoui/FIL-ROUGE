<?php

include_once 'models/login_model.php';

class LoginController  {

	function index() {

		$this->view->render('login/index');
		
	}
	
	function run()
	{	
		if(isset($_POST['login'])){
			$data = array(
				'email' => $_POST['email'],
				'password' => $_POST['password']
			);
			
			$model= new Login_Model();
			$get = $model->run($data);
			if(password_verify($_POST['password'], $get['password']) == true){
				$_SESSION['user'] = $get['name'];
				$_SESSION['role'] = $get['role'];
				echo '<alert class="alert alert-success">Login Successful</alert>';
				header("location: dashboard");
			}
			else{
				header("location: login");
			}
		}
	}

	public function up(){
		if(isset($_POST['submit'])){
			$data = array(
				'email' => $_POST['email'],
				'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
			);
			$model= new Login_Model();
			$get = $model->up($data);
		}
	}

	/* logging out the user */
	public function logout()
	{
		session_unset();
		session_destroy();
		header('location: home');
		exit;
	}
}