
<!-- Sidebar-->
<div class="d-flex h-100" id="wrapper">
<div class="Sidebar" id="sidebar-wrapper">
<div class="header_img text-center"><img class="rounded-circle mx-5 p-3" src="https://i.imgur.com/hczKIze.jpg" alt=""> 
<h3 class="text-center m-3"><?php echo $_SESSION['user']?></h3>
<br>
</div>
    <div class=" text-center list-group list-group-flush ms-3">
        <div class="icon_Home pt-1 me-4 d-flex me-3 div-link">
            <a href="dashboard" class="fs-5 text-center text-decoration-none text-dark d-flex align-items-center nav-link">
            <i class="bi  bi-house me-3"></i>
            Home</a>
        </div>
        <br>
        <div class="mt-3 d-flex ms-3">
            <a href="clients" class="fs-5 text-center me-3 text-decoration-none text-dark ">
            <i class="fa-solid fa-hard-hat me-3"></i>
            Clients</a>
        </div>
        <br>
    </div>
</div>
<!-- /#sidebar-wrapper -->