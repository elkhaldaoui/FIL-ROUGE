<?php 
	if(isset($_POST['id'])){
		$exitReleve = new RelevesController();
		$releve = $exitReleve->getOneReleve();
	}else{
		Redirect::to('releves');
	}
	if(isset($_POST['submit'])){
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
							<input type="text" name="password" class="form-control" placeholder="Temperature"
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
							<label for="date_admission">Date</label>
							<input type="date" name="date" value="<?php echo $releve->date;?>" class="form-control">
						</div><br>
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="submit">Valider</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>