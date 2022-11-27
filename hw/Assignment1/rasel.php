<?php 
session_start();
if (isset ($_POST['login'])){
   $uname = $_POST["uname"];
   $password= $_POST["password"];

   if($uname=="rasel" && $password=="09876") {

      $msg = "<div class='alert alert-success alert-dismissible mt-3'>login hoiche <button class='btn-close' data-bs-dismiss='alert' ></button> </div>";
       $_SESSION['user'] ="RASEL HOWLADER";
   } else {
      $msg = "<div class='alert alert-denger alert-dismissible mt-3'>Username or password problem <button class='btn-close'data-bs-dismiss='alert'></button></div>";
   }

}
if(isset($_POST["logout"])) {
   session_unset();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.
    com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
   <div class="containar">
<div class="row min-vh-100 d-flex">
    <div class="col-md-4 m-auto border rounded shadow p-4">
      <?php if (!isset($_SESSION['user'])) { ?>
        <h2>Login Form</h2>
        <form action="" method="post">
          <div class="m-3">
             <input type="text" placeholder="user Name" class="from-control" name="uname">
               </div>
            <div class="m-3"> 
                <input type="password" placeholder="password"class="from-control " name="password">
         </div>
         <button type="submit" class="btn btn-primary ms-2" name="login">Log In</button>
      </form>
      <?= $msg ?? null ?>

   <?php } else { ?>


<form action="" method ="post">
<marquee behavior="" direction="">
<h5 class="text-center">
Welcome  <?= $_SESSION['user'] ?>
</h5>
</marquee>

<button class="btn btn-primary d-block m-auto" name="logout">Log Out</button>
</form>
<?php } ?>
    
   </div>
 </div>
</div> 
<script src ="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js"></script>
</body>
</html>