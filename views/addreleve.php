<?php 
	if(isset($_POST['submit'])){
		$newReleve = new RelevesController();
		$newReleve->addReleve();
	}
?>
<div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">Ajouter Relevé</div>
				<div class="card-body bg-light">
					<form method="post">
						<div class="form-group">
							<label for="matricule">Matricule</label>
							<input type="text" name="matricule" class="form-control" placeholder="Matricule">
						</div><br>
						<div class="form-group">
							<select class="form-control" name="etat">
								<option value="1">Disponible</option>
								<option value="0">Indisponible</option>
							</select>
						</div><br>
						<div class="form-group">
							<label for="vitesse">Vitesse</label>
							<input type="text" name="vitesse" class="form-control" placeholder="Vitesse">
						</div><br>
						<div class="form-group">
							<label for="temperature">Temperature</label>
							<input type="text" name="temperature" class="form-control" placeholder="Temperature">
						</div><br>
						<div class="form-group">
							<label for="date">Date</label>
							<input type="date" name="date" class="form-control">
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