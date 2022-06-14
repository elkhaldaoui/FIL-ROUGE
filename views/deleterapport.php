<?php 
	if(isset($_POST['id'])){
		$exitRapport = new RapportsController();
		$exitRapport->deleteRapport();
	}
?>
