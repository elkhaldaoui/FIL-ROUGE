<?php 
	if(isset($_POST['submit'])){
		$newAgent = new AgentsController();
		$newAgent->addAgent();
	}
?>
<div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">Ajouter un Agent</div>
				<div class="card-body bg-light">
					<form method="post">
						<div class="form-group">
							<label for="nom">Name*</label>
							<input type="text" name="name" class="form-control" placeholder="Name">
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
							<label for="role">Role*</label>
							<input type="text" name="role" class="form-control">
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