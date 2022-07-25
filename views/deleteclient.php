<?php 
	if(isset($_POST['id'])){
		$exitClient = new ClientsController();
		$exitClient->deleteClient();
	}
?>
