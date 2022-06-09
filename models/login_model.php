<?php

class Login_Model 
{


	public function run($pass,$email)
	{
	
		$res= Db::connect()->query("SELECT * FROM agents WHERE email='$email' and password ='$pass'");
		return $res->fetch(PDO::FETCH_ASSOC);
	
		
		
	}
		
}