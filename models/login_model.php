<?php

class Login_Model 
{


	public function run($email,)
	{
	
		$res = Db::connect()->query("SELECT * FROM agents WHERE email='$email'");
		return $res->fetch(PDO::FETCH_ASSOC);
	
	}
		
}