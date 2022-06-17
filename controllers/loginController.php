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
				header("location: dashboard");
			}
			else{
				header("location: login");
			}


			// $email=$_POST['email'];
			// $user=$model->run($email);
			// $pass = $user['password'];
		// session_start();

		// $_SESSION['ROLE']=$user['role'];
			//echo password_hash('12345', PASSWORD_DEFAULT);
			// header('Location: dashboard');
			// echo '<alert>alert("welcom to your dasboard")</alert>';
			// if(password_verify($password, $pass)){
			// 	header('Location: dashboard');
			// 	echo '<script>alert("welcom to your dasboard")</script>';

			// }
			// else{
			// 	echo '<script>alert("Invalid email or password")</script>';
			// }
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