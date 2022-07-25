<?php 
	if(isset($_POST['id'])){
		$exitClient = new ClientsController();
		$client = $exitClient->getOneClient();
	}else{
		Redirect::to('clients');
	}
	if(isset($_POST['submit'])){
		$exitClient = new ClientsController();
		$exitClient->updateClient();
	}
?>
<div class="container ">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card overflow-auto">
				<div class="card-header">Modifier un Client</div>
				<div class="card-body bg-light">
					<form method="post">
						<div class="form-group">
							<label for="nom">Nom*</label>
							<input type="text" name="nom" class="form-control" placeholder="Nom"
							value="<?php echo $client->nom; ?>">
						</div><br>
						<div class="form-group">
							<label for="prenom">Prenom*</label>
							<input type="text" name="prenom" class="form-control" placeholder="Prenom"
							value="<?php echo $client->prenom; ?>">
						</div><br>
						<div class="form-group">
							<label for="email">Email*</label>
							<input type="text" name="email" class="form-control" placeholder="Email"
							value="<?php echo $client->email; ?>">
						</div><br>
						<div class="form-group">
							<label for="phone">Phone*</label>
							<input type="text" name="phone" class="form-control" placeholder="Phone"
							value="<?php echo $client->phone; ?>">
							<input type="hidden" name="id" value="<?php echo $client->id;?>">
						</div><br>
						<div class="form-group">
							<label for="adresse">Adresse*</label>
							<input type="text" name="adresse" class="form-control" placeholder="Adresse"
							value="<?php echo $client->adresse; ?>">
						</div><br>
						<div class="form-group">
							<select class="form-control" name="situation">
								<option value="1" <?php echo $client->situation ? 'selected' : ''; ?>>Active</option>
								<option value="0"
								<?php echo !$client->situation ? 'selected' : ''; ?>
								>Congé</option>
							</select>
						</div><br>
						<div class="form-group">
							<label for="date_admission">Date Admission*</label>
							<input type="date" name="date_admission" value="<?php echo $client->date_admission;?>" class="form-control">
						</div><br>
						<div class="form-group">
							<label for="salaire">Salaire*</label>
							<input type="text" name="salaire" value="<?php echo $client->salaire;?>" class="form-control">
						</div><br>
					    <div class="form-group">
							<select class="form-control" name="role">
								<option value="Admin" <?php echo $client->role ? 'selected' : ''; ?>>Admin</option>
								<option value="Emlpoye"
								<?php echo !$client->role ? 'selected' : ''; ?>
								>Client</option>
							</select>
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