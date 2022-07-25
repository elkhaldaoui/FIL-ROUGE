<?php

class Login_Model 
{


	public function run($data)
	{
		$stmt = Db::connect()->prepare('SELECT * FROM `clients` WHERE email = :email');
		$stmt->bindParam(':email', $data['email']);
		$stmt->execute();
		$get =  $stmt->fetch(PDO::FETCH_ASSOC);
		return $get;
	
	
	}
		
}