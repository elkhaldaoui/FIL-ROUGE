<?php
class paymentController{
    public function getonepayment(){
		if(isset($_POST['id'])){
			$data = array(
				'id' => $_POST['id']
			);
			$client = payment::getpayment($data);
			return $client;
		}
	}
    public function getAllpayments(){
        $client= payment::getAllpayment();
        return $client;
    }
    public function addpayments(){
        if(isset($_POST['submit'])){
            $data= array(
                'name'=>$_POST['name'],
                'date'=>$_POST['date'],
            );
            $result= payment::addpayment($data);
            if($result === 'ok'){
                Session::set('success','payment ajoute');
                Redirect::to('displaypayment');
            }else{
                echo $result;
            }
        }
    }

    public function updatepayments(){
        if(isset($_POST['submit'])){
            $data= array(
                'id'=>$_POST['id'],
                'name'=>$_POST['name'],
                'date'=>$_POST['date'],
            );
            $result= payment::updatepayment($data);
            if($result === 'ok'){
                Session::set('success','payment modifiee');
                Redirect::to('displaypayment');
            }else{
                echo $result;
            }
        }
    }

    public function deletepayments(){
		if(isset($_POST['id'])){
			$data['id'] = $_POST['id'];
			$result = payment::deletepayment($data);
			if($result === 'ok'){
                Session::set('success','payment Supprimé');
                Redirect::to('displaypayment');
			}else{
				echo $result;
			}
		}
	}

    public function findpayments(){
		if(isset($_POST['search'])){
			$data = array('search' => $_POST['search']);
		}
		$client = payment::searchpayment($data);
		return $client;
	} 
}