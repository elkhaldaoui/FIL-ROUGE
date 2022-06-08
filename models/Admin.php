<?php
class admin{

    static public function getAdmin($data){
		$id = $data['id'];
		try{
			$query = 'SELECT * FROM admin WHERE id=:id';
			$stmt = DB::connect()->prepare($query);
			$stmt->execute(array(":id" => $id));
			$employe = $stmt->fetch(PDO::FETCH_OBJ);
			return $employe;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

   static public function getalladmin(){
        $con= DB::connect()->prepare('SELECT * FROM admin');
        $con->execute();
        return $con->fetchAll();
   } 
   static public function addadmin($data){
    $con= DB::connect()->prepare('INSERT INTO admin(full_name,password) VALUES (:name,:password)');
    $con->bindParam(':name',$data['name']); 
    $con->bindParam(':password',$data['password']); 
     if($con->execute()){
         return 'ok';
     }else{
         return 'error';
     }
     $con= null;
      
   }

   static public function updateadmin($data){
    $con= DB::connect()->prepare('UPDATE admin SET full_name=:name, password=:password  WHERE id=:id');
    $con->bindParam(':id',$data['id']); 
    $con->bindParam(':name',$data['name']); 
    $con->bindParam(':password',$data['password']); 
     if($con->execute())
     {
         return 'ok';
     }else{
         return 'error';
     }    
   }

   static public function deleteadmin($data){
    $id = $data['id'];
    try{
        $query = 'DELETE FROM admin WHERE id=:id';
        $con = DB::connect()->prepare($query);
        $con->execute(array(":id" => $id));
        if($con->execute()){
            return 'ok';
        }
    }catch(PDOException $ex){
        echo 'erreur' . $ex->getMessage();
    }
}
        static public function searchadmin($data){
            $search = $data['search'];
            try{
                $query = 'SELECT * FROM admin WHERE full_name LIKE ?';
                $con = DB::connect()->prepare($query);
                $con->execute(array('%'.$search.'%'));
                $client = $con->fetchAll();
                return $client;
            }catch(PDOException $ex){
                echo 'erreur' . $ex->getMessage();
            }
        }

}