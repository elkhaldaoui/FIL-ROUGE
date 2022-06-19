<?php 
	if(isset($_POST['id'])){
		$exitRapport = new RapportsController();
		$rapport = $exitRapport->getOneRapport();
	}
	if(isset($_POST['update'])){
		$exitRapport = new RapportsController();
		$exitRapport->updateRapport();
	}
?>
<div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">Modifier Rapport</div>
				    <div class="card-body bg-light">
					<form method="POST">
                        <div class="form-group">
                            <select class="form-select" name="poste" aria-label="Default select example">
                                <option selected>Selectioné le Poste</option>
                                <option value="P1" <?php echo $rapport->poste ? 'selected' : ''; ?>>P1</option>
                                <option value="P2" <?php echo !$rapport->poste ? 'selected' : ''; ?>>P2</option>
                                <option value="P3" <?php echo !$rapport->poste ? 'selected' : ''; ?>>P3</option>
                            </select>
						</div><br>
						<div class="form-group">
                            <label for="rapport">Rapport</label>
                            <textarea name="rapport" class="form-control" rows="3"><?php echo $rapport->rapport;?></textarea>
                        </div><br>
						<div class="form-group">
							<label for="date">Date</label>
							<input type="date" name="date" value="<?php echo $rapport->date;?>" class="form-control">
						</div>
						<input type="hidden" name="id" value="<?php echo $rapport->id; ?>">
						<!-- <div class="form-group"> -->
						<button type="submit" class="btn btn-primary mt-3" name="update">Valider</button>
						<!-- </div> -->
					</form>
				    </div>
			    </div>
		    </div>
	    </div>
    </div>
</div>