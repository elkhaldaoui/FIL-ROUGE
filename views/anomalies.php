<?php 
	if(isset($_POST['find'])){
		$data = new AnomaliesController();
		$anomalies = $data->findAnomalies();
	}else{
		$data = new AnomaliesController();
		$anomalies = $data->getAllAnomalies();
	}
?>
<!-- Page content-->
    <div class="d-grid gap-2 m-3">
      <a href="addanomalie" class="btn btn-primary" type="button">Add New Anomalie</a>
    </div>
<!-- container -->
<div class="container overflow-auto">
  <div class="row m-3">
    <?php foreach($anomalies as $anomalie):?>
    <!-- cards -->
    <div class="card m-3" style="max-width: 540px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="views/assests/img/moteur-electrique.jpg" class="img-fluid rounded-start" alt="image">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><?php echo $anomalie['titre'];?></h5>
            <p class="card-text"><?php echo $anomalie['text'];?></p>
            <p class="card-text"><small class="text-muted"><b> <?php echo $anomalie['date'];?> </b> 3 mins ago</small></p>
            <div class=" d-flex">
                <form method="post" class="mr-1" action="updateanomalie">
                      <input type="hidden" name="id" value="<?php echo $anomalie['id'];?>">
                      <button class="btn btn-success btn-sm">Update</button>
                </form>
                <form method="post" class="mx-1" action="deleteanomalie">
                      <input type="hidden" name="id" value="<?php echo $anomalie['id'];?>">
                      <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach;?>
    <!-- cards -->
  </div>
</div>
<!-- container -->
<!-- page content -->



