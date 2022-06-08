<?php
class Client{

    static public function getclient($data){
		$id = $data['id'];
		try{
			$query = 'SELECT * FROM client WHERE id=:id';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":id" => $id));
			$employe = $stmt->fetch(PDO::FETCH_OBJ);
			return $employe;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

   static public function getall(){
        $con= DB::connect()->prepare('SELECT * FROM client');
        $con->execute();
        return $con->fetchAll();
   } 
   static public function addClient($data){
    $con= DB::connect()->prepare('INSERT INTO client(full_name,adresse,email,role,password) VALUES (:name,:adresse,:email,:role,:password)');
    $con->bindParam(':name',$data['name']); 
    $con->bindParam(':adresse',$data['adresse']); 
    $con->bindParam(':email',$data['email']); 
    $con->bindParam(':role',$data['role']); 
    $con->bindParam(':password',$data['password']); 
     if($con->execute()){
         return 'ok';
     }else{
         return 'error';
     }
     $con= null;
      
   }

   static public function updateClient($data){
    $con= DB::connect()->prepare('UPDATE client SET full_name=:name, adresse=:adresse, email=:email, role=:role, password=:password  WHERE id=:id');
    $con->bindParam(':id',$data['id']); 
    $con->bindParam(':name',$data['name']); 
    $con->bindParam(':adresse',$data['adresse']); 
    $con->bindParam(':email',$data['email']); 
    $con->bindParam(':role',$data['role']); 
    $con->bindParam(':password',$data['password']); 
     if($con->execute())
     {
         return 'ok';
     }else{
         return 'error';
     }    
   }

   static public function delete($data){
    $id = $data['id'];
    try{
        $query = 'DELETE FROM client WHERE id=:id';
        $con = DB::connect()->prepare($query);
        $con->execute(array(":id" => $id));
        if($con->execute()){
            return 'ok';
        }
    }catch(PDOException $ex){
        echo 'erreur' . $ex->getMessage();
    }
}
        static public function searchclient($data){
            $search = $data['search'];
            try{
                $query = 'SELECT * FROM client WHERE full_name LIKE ?';
                $con = DB::connect()->prepare($query);
                $con->execute(array('%'.$search.'%'));
                $client = $con->fetchAll();
                return $client;
            }catch(PDOException $ex){
                echo 'erreur' . $ex->getMessage();
            }
        }

}