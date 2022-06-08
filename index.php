<?php
  require_once './view/includes/header.php';
  require_once './autoload.php';
  require_once "./controllers/HomeController.php";
  require_once "./view/includes/alerts.php";


  $home= new HomeController();
  $pages= ['home','addclient','updateclient','deleteclient','displayclient','addadmin','updateadmin','deleteadmin','displayadmin','addproduct','updateproduct','deleteproduct','displayproduct','addpayment','updatepayment','deletepayment','displaypayment'];
if(isset($_GET['page'])){
   if(in_array($_GET['page'],$pages)){
           $page=$_GET['page'];
           $home->index($page);
   }else{
     include('./view/includes/404.php');
   }
}else{
  $home->index('home');
}
?> 
<?php
require_once './view/includes/footer.php';
?>