<?php

class Login_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
		Session::init();
	}

	public function run()
	{
		
		$email=$_POST['email'];
		$password=md5($_POST['password']);
		
		$res= $this->db->select("SELECT * FROM agents WHERE email = '".$email."' AND password = '".$password."'");
		$count = count($res);
		
		if ($count > 0) {
			
			Session::init();
			Session::set('role', "admin");
			Session::set('email', $email);
			Session::set('password', $res[0]['password']);
			header('location: '.URL.'login/index');
		} 
		   else {
			Session::set('loggedIn', false);
			header('location: '.URL);
		}
		
		
	}
		
}