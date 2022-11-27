<?php
   session_start();
   if(isset($_SESSION["login_auth"])){
      header("location:home.php");
      exit();
   }
   $loginDetails = array(
      "email" => "admin@gmail.com",
      "password" => "12345678"
   );

   if(isset($_POST["login"])){
      $email = $_POST["email"];
      $password = $_POST["password"];

      if(trim($email) == ""){
         $emailError = 'Email is required.';
      }else if(trim($password) == ""){
         $passError = 'Password is required.';
      }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $emailError = 'Email is invalid.';
      }elseif($loginDetails["email"] != $email){
         $emailError = 'Email does not exist.';
      }elseif($loginDetails["password"] != $password){
         $passError = 'Password is wrong.';
      }else{
         $loginSuccess = 'Login Success. Redirecting...';
         $_SESSION["login_auth"] = $loginDetails["email"];
         echo '<script>setTimeout(() => {window.location = "home.php";},3000);</script>';
      }
   }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <title>Login - Dipti</title>
  </head>
  <body>

   <div class="container">
      <div class="row d-flex vh-100 justify-content-center align-items-center">
         <div class="col-md-5">
            <div class="card shadow-sm">
                <div class="card-header bg-white border-0 text-center">
                  <img src="./assets/images/login-icon.png" width="100">
                  <h5 class="card-title">Login - DIPTI</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="text" class="form-control <?= $emailError ? 'is-invalid' : null; ?>" name="email" value="<?= $email ?? null; ?>" placeholder="Email">
                            <div class="invalid-feedback"><?= $emailError ?? null; ?></div>
                        </div>
                        <div class="form-group">
                           <label>Password</label>
                           <input type="password" class="form-control <?= $passError ? 'is-invalid' : null; ?>" name="password" value="<?= $password ?? null; ?>" placeholder="Password">
                           <div class="invalid-feedback"><?= $passError ?? null; ?></div>
                        <div class="form-group mt-3 mb-3">
                            <button type="submit" name="login" class="btn btn-success w-100">Login</button>
                        </div>
                        <?php if(isset($loginSuccess)){ ?>
                        <div class="form-group">
                           <div class="alert alert-success" role="alert"><?= $loginSuccess; ?></div>
                        </div>
                        <?php } ?>
                    </form>
                </div>
            </div>
         </div>
      </div>
   </div>

  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>