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
    <button type="button" class="btn btn-primary btn-lg btn-block m-3">Add Anomalie</button>
    <section class="align-self-stretch">
        <div class="card border-danger m-3">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
        <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" class="img-fluid"/>
        <a href="#!">
        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
        </a>
        </div>
        <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#!" class="btn btn-danger">Delete</a>
        </div>
        </div>
        <div class="card border-danger m-3">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
        <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" class="img-fluid"/>
        <a href="#!">
        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
        </a>
        </div>
        <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#!" class="btn btn-danger">Delete</a>
        </div>
        </div>
    </section>
    <!-- table -->
  </div>
</div>

<?php
require_once '../views/includes/footer.php';
?>


