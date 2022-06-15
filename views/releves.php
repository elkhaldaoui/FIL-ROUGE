<?php 
	if(isset($_POST['find'])){
		$data = new RelevesController();
		$releves = $data->findReleves();
	}else{
		$data = new RelevesController();
		$Releves = $data->getAllReleves();
	}
?>
<!-- Page content-->
<!-- table -->
<div class="container-xl">
  <div class="table-responsive">
    <div class="table-wrapper">
        <div class="table-title">
          <div class="row">
            <div class="col-sm-5">
            <h2><b>Relevés des Machines</b></h2>
            </div>
            <div class="col-sm-7">
            <a href="addreleve" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Add New Relevé</span></a>
            <button onclick="exportData()" class="btn btn-secondary"><i class="material-icons">&#xE24D;</i> <span>Export to Excel</span></button>
            </div>
          </div>
        </div>
        <table id="tblStocks" cellpadding="0" cellspacing="0" class="table table-striped table-hover">
          <thead>
          <tr>
          <th>#</th>
          <th>Matricule</th>						
          <th>Températur</th>
          <th>Vitesse</th>
          <th>Etat</th>
          <th>Date</th>
          <th>Action</th>
          </tr>
          </thead>
          <tbody>
          <?php foreach($Releves as $releve):?>
          <tr>
          <td><?php echo $releve['id'];?></td>
          <td><?php echo $releve['matricule'];?></td>
          <td><?php echo $releve['temperature'];?><span> °c</span></td>                        
          <td><?php echo $releve['vitesse'];?><span> tr/h</span></td>
          <td><?php echo $releve['etat']
                    ?
                    '<span class="badge-success">Disponible</span>'
                    :
                    '<span class="badge-danger">Indisponible</span>';
              ;?></td>
          <td><?php echo $releve['date'];?></td>
          <td class="d-flex flex-row">
            <form method="post" class="mr-1" action="updatereleve">
                  <input type="hidden" name="id" value="<?php echo $releve['id'];?>">
                  <button class="btn btn-sm btn-primary"><i class="fa fa-wrench"></i></button>
            </form>
            <form method="post" class="mr-1" action="deletereleve">
                  <input type="hidden" name="id" value="<?php echo $releve['id'];?>">
                  <button class="btn btn-sm btn-danger mx-1"><i class="fa fa-times"></i></button>
            </form>
	        </td>
          </tr>
          <?php endforeach;?>
          </tbody>
        </table>
    </div>
  </div>
</div>     
<!-- table -->
<!-- Page content-->

