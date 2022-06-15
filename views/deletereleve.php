<?php 
	if(isset($_POST['id'])){
		$exitReleve = new RelevesController();
		$exitReleve->deleteReleve();
	}
?>