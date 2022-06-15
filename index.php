<?php
if ($_SERVER['REQUEST_URI'] == "/FIL-ROUGE/login" || $_SERVER['REQUEST_URI'] == "/FIL-ROUGE/" || $_SERVER['REQUEST_URI'] == "/FIL-ROUGE/home" || $_SERVER['REQUEST_URI'] == "/FIL-ROUGE/404") {
  $test = 0;
  }
  else {
    require_once './views/includes/sidbar.php';
    require_once './views/includes/navbar.php';
  }
    require_once './views/includes/head.php';
    require_once './views/includes/alerts.php';
    require_once './autoload.php';

  
  $home= new HomeController();
  $pages= ['home','login','dashboard','agents','addagent','updateagent','deleteagent','anomalies','rapports','addrapport','updaterapport','deleterapport','releves','addreleve','updatereleve','deletereleve','404'];
   if(isset($_GET['page'])){
   if(in_array($_GET['page'],$pages)){
           $page=$_GET['page'];
           $home->index($page);
   }else{
     include('views/404.php');
   }
    }else{
      $home->index('home');
    }
    ?> 
    <?php
    require_once 'views/includes/footer.php';
    ?>
