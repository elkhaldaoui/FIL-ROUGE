<?php 
	if(isset($_POST['find'])){
		$data = new ClientsController();
		$Clients = $data->findClients();
	}else{
		$data = new ClientsController();
		$Clients = $data->getAllClients();
	}
  // var_dump($_SESSION)
?>
    <!-- Page content-->
    <!-- table -->
        <div class="container-xl overflow-auto">
        <div class="table-responsive">
        <div class="table-wrapper">
        <div class="table-title">
        <div class="row">
        <div class="col-sm-5">
        <h2>Clients <b>Management</b></h2>
        </div>
        <div class="col-sm-7">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          Add Client
        </button>
        </div>
        </div>
        </div>
        <table class="table table-striped table-hover">
        <thead>
        <tr>
        <th>#</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>						
        <th>Date Admission</th>
        <th>Salaire</th>
        <th>Situation</th>
        <th>Phone</th>
        <th>Adresse</th>
        <th>Role</th>
        <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($Clients as $client):?>
        <tr>
        <td><?php echo $client['id'];?></td>
        <td><?php echo $client['nom'];?></a></td>
        <td><?php echo $client['prenom'];?></td>
        <td><?php echo $client['email'];?></td>
        <td><?php echo $client['date_admission'];?></td>
        <td><?php echo $client['salaire'];?></td>
        <td><?php echo $client['situation']
                    ?
                    '<span class="badge bg-success">Active</span>'
                    :
                    '<span class="badge bg-danger">Congé</span>';
            ;?>
        </td>
        <td><?php echo $client['phone'];?></td>
        <td><?php echo $client['adresse'];?></td>
        <td><?php echo $client['role'];?>
        </td> 
          <?php 
              if ($_SESSION['role'] == 'Admin') {
                echo '
                <td class="d-flex flex-row">
                  <form method="post" class="mr-1" action="updateclient">
                        <input type="hidden" name="id" value=" ' . $client['id'] . '">
                        <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                  </form>
                  <form method="post" class="mr-1" action="deleteclient">
                        <input type="hidden" name="id" value="'.$client['id'].'">
                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                  </form>
                </td>
                ';
              } else {
                echo '';
              }
          ?>
        </tr>
        <?php endforeach;?>
        </tbody>
        </table>
        </div>
        </div>
        </div>     
      </body>
      <!-- table -->
  </div>
</div>

<?php 
	if(isset($_POST['submit'])){
		$newClient = new ClientsController();
		$newClient->addClient();
	}
?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
								<option value="Employe">Client</option>
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


