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
    <title>Home - Dipti</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">DIPTI</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="./home.php?logout=true">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="py-5 bg-image-full" style="background-image: url('./assets/images/background-1.jpg')">
            <div class="text-center my-5">
                <img class="img-fluid mb-4 bg-white" src="./assets/images/dipti-logo.png" width="100" alt="DIPTI Logo" />
                <h1 class="text-white fs-3 fw-bolder">Zobayer Hossain Mamun</h1>
                <p class="text-white-50 mb-0">Admin Dashboard</p>
            </div>
        </header>
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2>Full Width Backgrounds</h2>
                        <p class="lead">A single, lightweight helper class allows you to add engaging, full width background images to sections of your page.</p>
                        <p class="mb-0">The universe is almost 14 billion years old, and, wow! Life had no problem starting here on Earth! I think it would be inexcusably egocentric of us to suggest that we're alone in the universe.</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="py-5 bg-image-full" style="background-image: url('./assets/images/background-2.jpg')">
            <div style="height: 20rem"></div>
        </div>
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2>Engaging Background Images</h2>
                        <p class="lead">The background images used in this template are sourced from Unsplash and are open source and free to use.</p>
                        <p class="mb-0">I can't tell you how many people say they were turned off from science because of a science teacher that completely sucked out all the inspiration and enthusiasm they had for the course.</p>
                    </div>
                </div>
            </div>
        </section>
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; DIPTI 2022</p></div>
        </footer>
   <script src="./assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>