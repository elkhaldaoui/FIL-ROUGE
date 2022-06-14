<?php 
	if(isset($_POST['find'])){
		$data = new RapportsController();
		$rapports = $data->findRapports();
	}else{
		$data = new RapportsController();
		$rapports = $data->getAllRapports();
	}
?>
<!-- Page content-->
<!-- cards -->
<div class="d-grid gap-2 m-3">
  <a href="addrapport" class="btn btn-primary" type="button">Add New Rapport</a>
</div>
<?php foreach($rapports as $rapport):?>
  <div class="container overflow-auto">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title"><?php echo $rapport['poste'];?></h5>
          <textarea name="" id="" cols="185" rows="5"><?php echo $rapport['rapport'];?></textarea>
          <br><br>
          <label for="date"><?php echo $rapport['date'];?></label>
          <br><br>
          <div class="d-flex">
          <form method="post" class="mr-1" action="updaterapport">
                  <input type="hidden" name="id" value="<?php echo $rapport['id'];?>">
                  <button  type="button" class="btn btn-success btn-sm">Update</button>
          </form>
          <form method="post" class="mx-1" action="deleterapport">
                  <input type="hidden" name="id" value="<?php echo $rapport['id'];?>">
                  <button  type="button" class="btn btn-danger btn-sm">Delete</button>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endforeach;?>
<!-- cards -->



