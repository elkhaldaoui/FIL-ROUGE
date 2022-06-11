<?php 
	if(isset($_POST['id'])){
		$exitAgent = new AgentController();
		$agent = $exitAgent->getOneAgent();
	}else{
		Redirect::to('agents');
	}
	if(isset($_POST['submit'])){
		$exitAgent = new AgentController();
		$exitAgent->updateAgent();
	}
?>
<div class="container">
	<div class="row my-4">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-header">Modifier un Agent</div>
				<div class="card-body bg-light">
					<a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
						<i class="fas fa-home"></i>
					</a>
					<form method="post">
						<div class="form-group">
							<label for="name">Name*</label>
							<input type="text" name="name" class="form-control" placeholder="Name"
							value="<?php echo $agent->name; ?>"
							>
						</div>
						<div class="form-group">
							<label for="email">Email*</label>
							<input type="text" name="email" class="form-control" placeholder="Email"
							value="<?php echo $agent->email; ?>"
							>
						</div>
						<div class="form-group">
							<label for="password">Password*</label>
							<input type="password" name="password" class="form-control" placeholder="Password"
								value="<?php echo $agent->password; ?>">
						</div>
						<div class="form-group">
							<label for="phone">Phone*</label>
							<input type="text" name="phone" class="form-control" placeholder="Phone"
							value="<?php echo $agent->phone; ?>">
							<input type="hidden" name="id" value="<?php echo $Agent->id;?>">
						</div>
						<div class="form-group">
							<select class="form-control" name="situation">
								<option value="1" <?php echo $situation->situation ? 'selected' : ''; ?>>Active</option>
								<option value="0"
								<?php echo !$agent->situation ? 'selected' : ''; ?>
								>Congé</option>
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
						<div class="form-group">
							<button type="submit" class="btn btn-primary" name="submit">Valider</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>