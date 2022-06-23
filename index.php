<?php
session_start();
if(isset($_SESSION['login'])){if ($_SERVER['REQUEST_URI'] == "/FIL-ROUGE/login" || $_SERVER['REQUEST_URI'] == "/FIL-ROUGE/logout" || $_SERVER['REQUEST_URI'] == "/FIL-ROUGE/" || $_SERVER['REQUEST_URI'] == "/FIL-ROUGE/home" || $_SERVER['REQUEST_URI'] == "/FIL-ROUGE/404") {
  $test = 0;
  }
  else {
    require_once './views/includes/sidbar.php';
    require_once './views/includes/navbar.php';
  }}
    require_once './views/includes/head.php';
    include 'views/includes/alerts.php';
    require_once './autoload.php';

  
  $home= new HomeController();
  $pages= ['dashboard','agents','addagent','updateagent','deleteagent','rapports','addrapport','updaterapport','deleterapport','releves','addreleve','updatereleve','deletereleve','anomalies','addanomalie','updateanomalie','deleteanomalie','404','logout'];
   if(isset($_GET['page'])){
    if(isset($_SESSION['login']))
   {if(in_array($_GET['page'],$pages)){
           $page=$_GET['page'];
           $home->index($page);
   }else{
    $home->index('404');
  }
  }elseif(!isset($_SESSION['login'])){
    $page1= ['login','home','404'];
    if(in_array($_GET['page'],$page1)){
      $page=$_GET['page'];
      $home->index($page);}else{$home->index('404');}
  }else{
    if(isset($_SESSION['login'])){
            $home->index('dashboard');
}else{
  $home->index('home');
}
  }}
    ?> 
    <?php
    require_once 'views/includes/footer.php';
    ?>
