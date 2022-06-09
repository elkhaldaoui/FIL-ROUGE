<?php

class Login  {

	// function __construct() {
	// 	parent::__construct();
	// 	  Session::init();
	// }
	
	
	function index() {
	
		$this->view->render('login/index');
	}
	
	function run()
	{
		
		if(isset($_POST['login'])){
			$model= new Login_Model();
			$email=$_POST['email'];
			$password=$_POST['password'];
			// $count =$model->run($email,$password);
			$model=$model->run($password,$email);
	    if($model){
			header('location: dashboard');
		}
			
	}

		
	}
	
	
	/* logging out the user */
	function logout()
	{
		Session::destroy();
		header('location: index');
		exit;
	}
}