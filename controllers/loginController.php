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
				$_SESSION['login'] = true;
				echo '<alert class="alert alert-success">Login Successful</alert>';
				header("location: dashboard");
			}
			else{
				header("location: login");
			}
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