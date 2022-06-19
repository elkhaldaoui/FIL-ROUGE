<?php 
	if(isset($_POST['id'])){
		$exitReleve = new RelevesController();
		$releve = $exitReleve->getOneReleve();
	}
	if(isset($_POST['update'])){
		$exitReleve = new RelevesController();
		$exitReleve->updateReleve();
	}
?>
<div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">Modifier Relevé</div>
				<div class="card-body bg-light">
					<form method="post">
						<div class="form-group">
							<label for="matricule">Matricule</label>
							<input type="text" name="matricule" class="form-control" placeholder="Matricule"
							value="<?php echo $releve->matricule; ?>"
							>
						</div><br>
						<div class="form-group">
							<label for="vitesse">Vitesse</label>
							<input type="text" name="vitesse" class="form-control" placeholder="Vitesse"
							value="<?php echo $releve->vitesse; ?>"
							>
						</div><br>
						<div class="form-group">
							<label for="temperature">Temperature</label>
							<input type="text" name="temperature" class="form-control" placeholder="Temperature"
								value="<?php echo $releve->temperature; ?>">
						</div><br>
						<div class="form-group">
							<select class="form-control" name="etat">
								<option value="1" <?php echo $releve->etat ? 'selected' : ''; ?>>Disponible</option>
								<option value="0"
								<?php echo !$releve->etat ? 'selected' : ''; ?>
								>Indisponible</option>
							</select>
						</div><br>
						<div class="form-group">
							<label for="date">Date</label>
							<input type="date" name="date" value="<?php echo $releve->date;?>" class="form-control">
						</div><br>
						<input type="hidden" name="id" value="<?php echo $releve->id; ?>">
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