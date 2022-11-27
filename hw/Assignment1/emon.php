<?php  
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $uname = $_POST["uname"];
        $pass = $_POST["pass"];

        if ($uname == "emtyaz" && $pass == "123456"){
            $msg ="<div class='alert alert-success alert- mt-3'>Welcome Back Emtyaz<button class='btn-close' data-bs-dismiss='alert'></button></div>";
        $_SERVER['user'] = "Emtyaz";
        }else{
            $msg = "<div class='alert alert-danger alert-dismissable mt-3'> You're an Imposter<button class='btn-close' data-bs-dismiss='alert'></button></div>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row min-vh-100 d-flex">
            <div class="col-md-4 m-auto border rounded shadow p-4">
                <?php if (!isset ($_SERVER['user'])){ ?>
                <h2>Login Form</h2>
                <Form action="" method="post">
                    <div class="mb-3">
                        <input type="text" placeholder="User Name" class="form-control" name="uname">
                    </div>
                    <div class="mb-3">
                        <input type="password" placeholder="Password" class="form-control" name="pass">
                    </div>
                    <button type="submit" class="btn btn-primary">Log In</button>
                </Form>
                <?= $msg ?? null ?>
                <?php } else { ?>
                    <h2>Welcome Back <?=$_SERVER['user'] ?></h2>

                    
                
                <?php } ?>

                
            
            </div>
            
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js"></script>
</body>
</html>