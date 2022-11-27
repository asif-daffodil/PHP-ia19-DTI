<?php  
session_start();
if (isset($_POST["login"])) {
    $uname = $_POST["uname"];
    $pass = $_POST["pass"];

    if ($uname === "anik" && $pass === "123456") {
        $msg= "<div class= 'alert alert-success alert-dismissible mt-3'>login hoice<button class='btn-close' data-bs-dismiss='alert'></button></div>";
        $_SESSION['user'] = "rafayat anik";
    }else{
        $msg= "<div class= 'alert alert-danger alert-dismissible mt-3'>username or password error<button class='btn-close' data-bs-dismiss='alert'></button></div>";
    }
}

if (isset($_POST["logout"])) {
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>

<body>
    <div class="contaier">
        <div class="raw min-vh-100 d-flex">
            <div class="col-md-4 m-auto border rounded shadow p-4">
                <?php if (!isset($_SESSION['user'])) { ?>
                    <h2>Login Form</h2>
                    <form action="" method="post">
                        <div class="mb-3">
                            <input type="text" placeholder="User Name" class="form-control" name="uname">
                        </div>
                        <div class="mb-3">
                            <input type="Password" placeholder="Password" class="form-control" name="pass">
                        </div>
                        <button type="submit" class="btn btn-primary" name="login">Log In</button>
                    </form>
                    <?= $msg ?? null ?>
                <?php } else { ?>
                    <h2 class="text-center">
                        welcome <?= $_SESSION['user'] ?>
                    </h2>
                    <form action="" method= "post">
                        <button class="btn btn-primary d-block m-auto" name="logout">Log Out</button>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js"></script>
</body>
</html>