<?php 
	if(isset($_POST['submit'])){
		$newClient = new ClientsController();
		$newClient->addClient();
	}
?>
<div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">Ajouter un Client</div>
				<div class="card-body bg-light">
					<form method="post">
						<div class="form-group">
							<label for="nom">Nom*</label>
							<input type="text" name="nom" class="form-control" placeholder="Nom">
						</div>
						<div class="form-group">
							<label for="prenom">Prenom*</label>
							<input type="text" name="prenom" class="form-control" placeholder="Prenom">
						</div>
						<div class="form-group">
							<label for="email">Email*</label>
							<input type="email" name="email" class="form-control" placeholder="email">
						</div>
						<div class="form-group">
							<label for="password">Password*</label>
							<input type="password" name="password" class="form-control" placeholder="Password">
						</div>
						<div class="form-group">
							<label for="phone">Phone*</label>
							<input type="text" name="phone" class="form-control" placeholder="Phone">
						</div>
						<div class="form-group">
							<label for="adresse">Adresse*</label>
							<input type="text" name="adresse" class="form-control" placeholder="Adresse">
						</div>
                        <div class="form-group">
							<select class="form-control" name="situation">
								<option value="1">Active</option>
								<option value="0">Congé</option>
							</select>
						</div>
						<div class="form-group">
							<label for="date_admission">Date Admission*</label>
							<input type="date" name="date_admission" class="form-control">
						</div>
						<div class="form-group">
							<label for="salaire">Salaire*</label>
							<input type="text" name="salaire" class="form-control" placeholder="Salaire">
						</div>
					    <div class="form-group">
							<select class="form-control" name="role">
								<option value="Admin">Admin</option>
								<option value="Employe">Employe</option>
							</select>
						</div>
						<br>
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