<?php
   session_start();
   if(isset($_SESSION["login_auth"])){
      header("location:home.php");
      exit();
   }

   $loginDetails = array(
      "email" => "admin@admin.com",
      "password" => "12345678"
   );

   if(isset($_POST["login"])){
      $email = $_POST["email"];
      $password = $_POST["password"];

      $loginSuccess = 'Login Success. Redirecting...';
      $_SESSION["login_auth"] = $loginDetails["email"];
      header("location:home.php");
   }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <title>Login</title>
  </head>
  <body>

   <div class="container">
      <div class="row d-flex vh-100 justify-content-center align-items-center">
         <div class="col-md-5">
            <div class="card shadow-sm">
                <div class="card-header bg-white border-0 text-center">
                  <h5 class="card-title">Login</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="text" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                           <label>Password</label>
                           <input type="password" class="form-control" name="password" placeholder="Password">
                        <div class="form-group mt-3 mb-3">
                            <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
                        </div>
                    </form>
                </div>
            </div>
         </div>
      </div>
   </div>

  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>