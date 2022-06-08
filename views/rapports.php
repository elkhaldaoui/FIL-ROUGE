<?php
  require_once 'views/includes/head.php';
?>


<div class="d-flex" id="wrapper">
  <?php
    require_once 'views/includes/sidbar.php';
  ?>
  <div class="w-100">
    <?php
      require_once 'views/includes/navbar.php';
    ?>

    <!-- Page content-->
    <!-- cards -->
    <div class="d-grid gap-2 m-3">
      <button class="btn btn-primary" type="button">Add New Rapport</button>
    </div>
    <div class="row">
      <div class="col-sm-4 m-4">
      <div class="card">
      <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text lh-1">
        -With supporting text below as a natural lead-in to additional content.
        -With supporting text below as a natural lead-in to additional content.
      </p>
      <button type="button" class="btn btn-success btn-sm">Update</button>
      <button type="button" class="btn btn-danger btn-sm">Delete</button>
      </div>
      </div>
      </div>
          <div class="col-sm-4 m-4">
          <div class="card">
          <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text lh-1">
            -With supporting text below as a natural lead-in to additional content.
            -With supporting text below as a natural lead-in to additional content.
          </p>
          <button type="button" class="btn btn-success btn-sm">Update</button>
          <button type="button" class="btn btn-danger btn-sm">Delete</button>
          </div>
          </div>
          </div>
    </div>
    <!-- cards -->
  </div>
</div>

<?php
require_once '../views/includes/footer.php';
?>

