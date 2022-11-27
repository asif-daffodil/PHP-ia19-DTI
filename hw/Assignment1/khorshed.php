<?php 
session_start();
 if(isset ($_POST['login'])) {
    $uname=  $_POST["uname"];
    $pass=  $_POST["pass"];
    if($uname == "khorshed" && $pass == "152012"){
        $msg ="<div class='alert alert-success alert-dismissible fade show' role='alert'>login Successful! <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
        $_SESSION['user'] ="Md Khorshed Alam";
    }
    else{
        $msg ="<div class='alert alert-success alert-dismissible fade show' role='alert'>Username or password problem <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
    }
 }
   if(isset($_POST["logout"])){
    session_unset();
   }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js"></script>
</head>

<body>
    <style>
    .col-md-7 {
        flex: 0 0 auto;
        width: 97.333333%;
    }

    a {
        text-decoration: none;
    }

    .login-page {
        width: 100%;
        height: 100vh;
        display: inline-block;
        display: flex;
        align-items: center;
    }

    .form-right i {
        font-size: 100px;
    }
    .h6, h6 {
    font-size: 3rem;
}

    </style>
    <div class="login-page bg-light">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-6 offset-lg-1">
                    <?php if(!isset($_SESSION ['user'])) {?>
                    <h3 class="mb-3">Login Now</h3>
                    <div class="bg-white shadow rounded">
                        <div class="row">
                            <div class="col-md-7 pe-0">
                                <div class="form-left h-100 py-5 px-5">
                                    <form action="" method="post" class="row g-4">
                                        <div class="col-12">
                                            <label>Username<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="fa fa-user"></i></div>
                                                <input type="text" class="form-control" placeholder="Enter Username"
                                                    name="uname">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label>Password<span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text"><i class="fa fa-lock"></i></div>
                                                <input type="text" class="form-control" placeholder="Enter Password"
                                                    name="pass">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                                <label class="form-check-label" for="inlineFormCheck">Remember
                                                    me</label>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <a href="#" class="float-end text-primary">Forgot Password?</a>
                                        </div>

                                        <div class="col-12 pb-4">
                                            <button type="submit"
                                                class="btn btn-primary px-4 float-end mt-4" name="login">login</button>
                                        </div>
                                        <div class="icon">
                                         <button class="btn bg-primary bg-gradient" type="button">
                                        <span> <i class="fa-brands fa-facebook text-white"></i></span> <span class="text-white">Facebook</span>
                                         </button>
                                         <button class="btn bg-danger bg-gradient" type="button">
                                         <span> <i class="fa-brands fa-instagram text-white"></i> </span> <span class="text-white">instagram</span>
                                         </button>
                                           <button class="btn bg-success bg-gradient" type="button">
                                         <span> <i class="fa-brands fa-whatsapp text-white"></i> </span> <span class="text-white">Whatsapp</span>
                                       </button>
                                      
                                       </div>
    

                                        
                              </form>
                                    <?=$msg  ?? null ?>
                                    <?php } else {?>
                                        <h6>
                                              Welcome <?=$_SESSION['user']  ?>
                                    </h6>
                                    <form action="" method="post">
                                        <button class="btn btn-primary d-block m-auto " name="logout">Logout</button>
                                    </form>
                                        <?php } ?>

                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>