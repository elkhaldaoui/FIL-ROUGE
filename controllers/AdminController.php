<?php
class AdminController{
    public function getoneadmin(){
		if(isset($_POST['id'])){
			$data = array(
				'id' => $_POST['id']
			);
			$client = admin::getAdmin($data);
			return $client;
		}
	}
    public function getAlladmins(){
        $client= admin::getAlladmin();
        return $client;
    }
    public function addadmins(){
        if(isset($_POST['submit'])){
            $data= array(
                'name'=>$_POST['name'],
                'adresse'=>$_POST['adresse'],
                'email'=>$_POST['email'],
                'password'=>$_POST['password'],
                'role'=>$_POST['role'],
            );
            $result= admin::addadmin($data);
            if($result === 'ok'){
                Session::set('success','admin ajoute');
                Redirect::to('displayadmin');
            }else{
                echo $result;
            }
        }
    }

    public function updateadmins(){
        if(isset($_POST['submit'])){
            $data= array(
                'id'=>$_POST['id'],
                'name'=>$_POST['name'],
                'adresse'=>$_POST['adresse'],
                'email'=>$_POST['email'],
                'password'=>$_POST['password'],
                'role'=>$_POST['role'],
            );
            $result= admin::updateadmin($data);
            if($result === 'ok'){
                Session::set('success','admin modifiee');
                Redirect::to('displayadmin');
            }else{
                echo $result;
            }
        }
    }

    public function deleteadmins(){
		if(isset($_POST['id'])){
			$data['id'] = $_POST['id'];
			$result = admin::deleteadmin($data);
			if($result === 'ok'){
                Session::set('success','admin Supprimé');
                Redirect::to('displayadmin');
			}else{
				echo $result;
			}
		}
	}

    public function findadmins(){
		if(isset($_POST['search'])){
			$data = array('search' => $_POST['search']);
		}
		$client = admin::searchadmin($data);
		return $client;
	} 
}