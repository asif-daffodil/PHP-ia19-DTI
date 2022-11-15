<?php 
    if (isset($_POST['login'])) {
       $uname=$_POST['uname'];
       $pass=$_POST['pass'];
       if ($uname=="haydar"&& $pass==123456) {
        $msg= "<div class='alert alert-success alert-dismissible'>Login Hoiche<button class='btn-close' data-bs-dismiss='alert'></div>";
        $_SESSION['user']='Welcome To Ali Haydar';
       }else {
        $msg= "<div class='alert alert-danger alert-dismissible'>Login Hoi nai<button class='btn-close' data-bs-dismiss='alert'></div>";
       }
    }

    if (isset($_POST['logout'])) {
      session_unset();
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Hello, world!</title>
  </head>
  <body>
  
    <div class="container">
        <div class="row d-flex min-vh-100">
            <div class="col-md-4 m-auto">
     <?php 
     if (!isset($_SESSION['user'])) {
       
   
     ?>          
    <form action="" method="post">
    <h1>Login From</h1>
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="text" id="form2Example1" class="form-control" name="uname" />
    <label class="form-label" for="form2Example1">Username</label>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" id="form2Example2" class="form-control"  name="pass"/>
    <label class="form-label" for="form2Example2">Password</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Remember me </label>
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="#!">Forgot password?</a>
    </div>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4" name="login">Sign in</button>

   <!-- Register buttons -->
   <div class="text-center">
    <p>Not a member? <a href="#!">Register</a></p>
    <p>or sign up with:</p>
    <button type="button" class="btn btn-link btn-floating mx-2">
      <i class="fab fa-facebook-f"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-2">
      <i class="fab fa-google"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-2">
      <i class="fab fa-twitter"></i>
    </button>

    <button type="button" class="btn btn-link btn-floating mx-2">
      <i class="fab fa-github"></i>
    </button>
  </div>
  <?php 
  echo $msg??null;
  ?>
</form>
<?php 
  }else{?>
  <h2>
 <?= $_SESSION['user'] ?>
  </h2>
  <form action="" method="post">
  <button class="btn btn-primary d-block m-auto" name="logout">Logout</button>
  </form>
<?php  }?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>