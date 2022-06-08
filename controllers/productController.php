<?php
class productController{
    public function getoneproduct(){
		if(isset($_POST['id'])){
			$data = array(
				'id' => $_POST['id']
			);
			$client = product::getproduct($data);
			return $client;
		}
	}
    public function getAllproducts(){
        $client= product::getAllproduct();
        return $client;
    }
    public function addproducts(){
        if(isset($_POST['submit'])){
            $data= array(
                'name'=>$_POST['name'],
                'price'=>$_POST['price'],
                'date'=>$_POST['date'],
            );
            $result= product::addproduct($data);
            if($result === 'ok'){
                Session::set('success','produit ajoute');
                Redirect::to('displayproduct');
            }else{
                echo $result;
            }
        }
    }

    public function updateproducts(){
        if(isset($_POST['submit'])){
            $data= array(
                'id'=>$_POST['id'],
                'name'=>$_POST['name'],
                'price'=>$_POST['price'],
                'date'=>$_POST['date'],
            );
            $result= product::updateproduct($data);
            if($result === 'ok'){
                Session::set('success','produit modifiee');
                Redirect::to('displayproduct');
            }else{
                echo $result;
            }
        }
    }

    public function deleteproducts(){
		if(isset($_POST['id'])){
			$data['id'] = $_POST['id'];
			$result = product::deleteproduct($data);
			if($result === 'ok'){
                Session::set('success','produit Supprimé');
                Redirect::to('displayproduct');
			}else{
				echo $result;
			}
		}
	}

    public function findproducts(){
		if(isset($_POST['search'])){
			$data = array('search' => $_POST['search']);
		}
		$client = product::searchproduct($data);
		return $client;
	} 
}