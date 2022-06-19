<?php 
	if(isset($_POST['id'])){
		$exitAnomalie = new AnomaliesController();
		$exitAnomalie->deleteAnomalie();
	}
?>