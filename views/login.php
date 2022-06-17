<?php
if(isset($_POST['login'])){
  $agent = new LoginController();
  $agent->run();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="views/assests/css/style.css">
    <title>Authenticate</title>
    <style>
        body {
            background-image: url('https://img.freepik.com/photos-gratuite/superviseur-travailleur-discutant-resultats-production-nouvelle-strategie-dans-hall-industriel-usine_342744-112.jpg?w=2000');
            background-repeat: no-repeat; background-size: 100%; background-position: center;
        }
    </style>
</head>
<body>
    <div style="background-color: lightgrey; opacity: 90%; width: 100%; height: 100vh;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="home">Usine Management</a>
                <a href="login" class="btn btn-dark d-flex">Login</a>
            </div>
        </nav>
        <div>
          <div class="login">
              <h2 class="tlogin">Authenticate</h2>
              <form id="loginform" method="POST">
                <div class="sec">
                  <label for="email">Email</label>
                  <input type="text" name="email" id="email" class="form-control" required=”required” placeholder="Email" aria-label="email" aria-describedby="addon-wrapping">
                  <p id="usernameError" class="invalid-feedback small"></p>    
                </div>
                <div class="sec">
                  <label for="password">Password</label>
                  <input type="password" name="password" id="password" class="form-control" required=”required” placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping">
                  <p id="passwordError" class="invalid-feedback small"></p>       
                </div>
                <div class="sec">
                  <button class="btn btn-sepcial" type="submit" name="login">Login</button>
                  <!-- <input class="btn btn-sepcial" type="submit" value="Login" name="login"> -->
                </div>     
              </form>
              <p class="s13">No account? Ask your admin for one.</p>
          </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>