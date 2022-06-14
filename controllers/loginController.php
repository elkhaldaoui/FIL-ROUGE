<?php

include_once 'models/login_model.php';

class LoginController  {

	function index() {
	
		$this->view->render('login/index');
	}
	
	function run()
	{
		
		if(isset($_POST['login'])){
			$model= new Login_Model();
			$email=$_POST['email'];
			$password=md5($_POST['password']);
			$user=$model->run($email);
			$pass = $user['password'];
			//echo password_hash('12345', PASSWORD_DEFAULT);
			header('Location: dashboard');
			echo '<alert>alert("welcom to your dasboard")</alert>';
			// if(password_verify($password, $pass)){
			// 	header('Location: dashboard');
			// 	echo '<script>alert("welcom to your dasboard")</script>';

			// }
			// else{
			// 	echo '<script>alert("Invalid email or password")</script>';
			// }
		}
	}
	/* logging out the user */
	function logout()
	{
		Session::destroy();
		header('location: login');
		exit;
	}
}