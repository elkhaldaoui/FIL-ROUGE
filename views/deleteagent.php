<?php 
	if(isset($_POST['id'])){
		$exitAgent = new AgentsController();
		$exitAgent->deleteAgent();
	}
?>