<?php 
	if(isset($_POST['find'])){
		$data = new AgentsController();
		$Agents = $data->findAgents();
	}else{
		$data = new AgentsController();
		$Agents = $data->getAllAgents();
	}
?>
    <!-- Page content-->
    <!-- table -->
        <div class="container-xl overflow-auto">
        <div class="table-responsive">
        <div class="table-wrapper">
        <div class="table-title">
        <div class="row">
        <div class="col-sm-5">
        <h2>Agents <b>Management</b></h2>
        </div>
        <div class="col-sm-7">
        <a href="addagent" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New Agent</span></a>	
        </div>
        </div>
        </div>
        <table class="table table-striped table-hover">
        <thead>
        <tr>
        <th>#</th>
        <th>Full-Name</th>
        <th>Email</th>						
        <th>Date Admission</th>
        <th>Situation</th>
        <th>Phone</th>
        <th>Role</th>
        <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($Agents as $agent):?>
        <tr>
        <td><?php echo $agent['id'];?></td>
        <td><?php echo $agent['name'];?></a></td>
        <td><?php echo $agent['email'];?></td>
        <td><?php echo $agent['date_admission'];?></td>
        <td><?php echo $agent['situation']
                    ?
                    '<span class="badge bg-success">Active</span>'
                    :
                    '<span class="badge bg-danger">Congé</span>';
            ;?>
        </td>
        <td><?php echo $agent['phone'];?></td>
        <td> <?php echo $agent['role'];?>
        </td> 
        <td class="d-flex flex-row">
                <form method="post" class="mr-1" action="updateagent">
                      <input type="hidden" name="id" value="<?php echo $agent['id'];?>">
                      <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                </form>
                <form method="post" class="mr-1" action="deleteagent">
                      <input type="hidden" name="id" value="<?php echo $agent['id'];?>">
                      <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                </form>
        </td>
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


