<?php
class ClientController{
    public function getoneclient(){
		if(isset($_POST['id'])){
			$data = array(
				'id' => $_POST['id']
			);
			$client = client::getclient($data);
			return $client;
		}
	}
    public function getAllClient(){
        $client= Client::getAll();
        return $client;
    }
    public function addClients(){
        if(isset($_POST['submit'])){
            $data= array(
                'name'=>$_POST['name'],
                'adresse'=>$_POST['adresse'],
                'email'=>$_POST['email'],
                'password'=>$_POST['password'],
                'role'=>$_POST['role'],
            );
            $result= client::addClient($data);
            if($result === 'ok'){
                Session::set('success','client ajoute');
                Redirect::to('displayclient');
            }else{
                echo $result;
            }
        }
    }

    public function updateClients(){
        if(isset($_POST['submit'])){
            $data= array(
                'id'=>$_POST['id'],
                'name'=>$_POST['name'],
                'adresse'=>$_POST['adresse'],
                'email'=>$_POST['email'],
                'password'=>$_POST['password'],
                'role'=>$_POST['role'],
            );
            $result= client::updateClient($data);
            if($result === 'ok'){
                Session::set('success','client modifiee');
                Redirect::to('displayclient');
            }else{
                echo $result;
            }
        }
    }

    public function deleteClient(){
		if(isset($_POST['id'])){
			$data['id'] = $_POST['id'];
			$result = client::delete($data);
			if($result === 'ok'){
                Session::set('success','client Supprimé');
                Redirect::to('displayclient');
			}else{
				echo $result;
			}
		}
	}

    public function findclient(){
		if(isset($_POST['search'])){
			$data = array('search' => $_POST['search']);
		}
		$client = client::searchclient($data);
		return $client;
	} 
}