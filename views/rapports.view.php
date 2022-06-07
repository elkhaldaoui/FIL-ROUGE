<?php
  require_once '../views/includes/head.php';
?>


<div class="d-flex" id="wrapper">
  <?php
    require_once '../views/includes/sidbar.php';
  ?>
  <div class="w-100">
    <?php
      require_once '../views/includes/navbar.php';
    ?>

    <!-- Page content-->
    <!-- table -->
    <div class="d-flex flex-column bd-highlight mb-3">
      <div class="card border-dark">
      <div class="card-body">
      <h5>Name</h5>
      <h5 class="card-title">Rapport de Jour</h5>
      <p class="card-text">
      -Some quick example text to build on the card title and make up the bulk of the card's content. <br>
      -Some quick example text to build on the card title and make up the bulk of the card's content. <br>
      -Some quick example text to build on the card title and make up the bulk of the card's content. <br>
      </p>
      <div class="btn-group" role="group" aria-label="Basic example">
      <button type="button" class="btn btn-primary">Update</button>
      <button type="button" class="btn btn-danger">Delete</button>
      </div>
      </div>
      </div>
    </div>
    <br>
    <div class="d-flex flex-column bd-highlight mb-3">
      <div class="card border-dark">
      <div class="card-body">
      <h5>Name</h5>
      <h5 class="card-title">Rapport de Jour</h5>
      <p class="card-text">
      -Some quick example text to build on the card title and make up the bulk of the card's content. <br>
      -Some quick example text to build on the card title and make up the bulk of the card's content. <br>
      -Some quick example text to build on the card title and make up the bulk of the card's content. <br>
      </p>
      <div class="btn-group" role="group" aria-label="Basic example">
      <button type="button" class="btn btn-primary">Update</button>
      <button type="button" class="btn btn-danger">Delete</button>
      </div>
      </div>
      </div>
    </div>
    <!-- table -->
  </div>
</div>

<?php
require_once '../views/includes/footer.php';
?>

