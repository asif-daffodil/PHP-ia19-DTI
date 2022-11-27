<?php
session_start();
if(!isset($_SESSION["login_auth"])){
   header("location:index.php");
   exit();
}
if(isset($_GET["logout"])){
   unset($_SESSION["login_auth"]);
   header("location:index.php");
   exit();
}
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
        <title>Home</title>
    </head>
    <body>
        <div class="container">
        <div class="row d-flex vh-100 justify-content-center align-items-center">
            <div class="col-md-5">
                <h3>Welcome To Home</h3>
                <a href="home.php?logout=true" class="btn btn-primary">Logout</a>
            </div>
        </div>
        <script src="./assets/js/bootstrap.bundle.min.js"></script>
    </body>
</html>