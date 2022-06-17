<?php

class Login_Model 
{


	public function run($data)
	{
		$stmt = Db::connect()->prepare('SELECT * FROM `agents` WHERE email = :email');
		$stmt->bindParam(':email', $data['email']);
		$stmt->execute();
		$get =  $stmt->fetch(PDO::FETCH_ASSOC);
		return $get;
	
	
	}

	public function up($data){
		$stmt = Db::connect()->prepare('INSERT INTO `agents` (email, password) VALUES(:email, :password)');
		$stmt->bindParam(':email', $data['email']);
		$stmt->bindParam(':password', $data['password']);
		if($stmt->execute()){
			echo "O Nasser";
			die();
		}
	}
		
}