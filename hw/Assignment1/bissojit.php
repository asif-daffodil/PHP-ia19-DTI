<?php
session_start();
$passssss = "ontor1234";
if (isset($_POST['login'])) {
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    if ($email == "antor@gmail.com" && $pass == $passssss) {
        $msg = "<div class='alert alert-success alert-dismissible mt-3'>Login hoise<button class='btn-close' data-bs-dismiss='alert'></button></div>";
        $_SESSION['user'] = "Antor Biswas";
    }
    if (empty($email)) {
        $errEmail = "<span style='color: red'>Please Write Your Email.</span>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errEmail = "<span style='color: red'>The email address you entered isn't connected to an account. Find your account and log in.</span>";
    }

    if (empty($pass)) {
        $errPass = "<span style='color: red'>Please Write Your Password.</span>";
    } elseif ($pass != $passssss) {
        $errPass = "<span style='color: red'>Wrong password</span>";
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
    <title>Assignment</title>
    <link rel="shortcut icon" href="antor.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
        img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row min-vh-100 Info">
            <div class="col-md-4 m-auto border rounded shadow p-4 bg-secondary">
                <?php if (!isset($_SESSION['user'])) { ?>
                    <center>
                        <h2 class="bg-primary text-light mb-4 p-2 border rounded ">LOGIN FORM</h2>
                    </center>
                    <form action="" method="post">
                        <div class="mb-3">
                            <input type="text" placeholder="Enter Your Email" name="email" value="<?= $email ?? null ?>" class="form-control <?= isset($errEmail) ? 'is-invalid' : null ?>">
                            <?= $errEmail ?? null ?>
                        </div>
                        <div class="mb-3">
                            <input type="password" placeholder="Password" name="pass" value="<?= $pass ?? null ?>" class="form-control <?= isset($errPass) ? 'is-invalid' : null ?>">
                            <?= $errPass ?? null ?>
                        </div>
                        <button type="submit" class="btn btn-primary w-100" name="login">Log In</button>
                        <br><br>
                        <center>
                            <a class="text-light" style="text-decoration: none;">Forgotten Password?</a>
                        </center>
                    </form>
                    <?= $msg ?? null ?>
                <?php } else { ?>
                    <br>
                    <div class="container">
                        <center>
                            <a href="https://imgbox.com/xgvgmA27" class="align-center d=" target="_blank"><img src="https://thumbs2.imgbox.com/2d/af/xgvgmA27_t.jpg" alt="image host" /></a>
                        </center>
                    </div>
                    <h2 class="text-center">
                        Welcome <br> <?= $_SESSION['user'] ?>
                    </h2>
                    <form action="" method="post">
                        <button class="btn btn-primary d-block m-auto" name="logout">Log Out</button>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js"></script>
</body>

</html>