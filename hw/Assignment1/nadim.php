<?php
session_start();
    if(isset($_POST["login"])){
        $uname = $_POST["username"];
        $pass = $_POST["password"];
        
        if(empty($uname && $pass)){
            $errmsg = "<div class='alert alert-info alert-dismissible'>Please enter your username & password!<button class='btn-close' data-bs-dismiss='alert'></button></div>";
        }
        else {
            if ($uname == "admin" && $pass=="123456"){
                $msg = "<div class='alert alert-success alert-dismissible'>login successful!<button class='btn-close' data-bs-dismiss='alert'></button></div>";
                $_SESSION['name'] = "Mohammad Admin";
            }
            else {
                $msg = "<div class='alert alert-danger alert-dismissible'>Username or Password Wrong!<button class='btn-close' data-bs-dismiss='alert'></button></div>";
            }
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
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="row min-vh-100 d-flex">
            <div class="col-md-5 m-auto border rounded shadow p-4">
                <?php if(!isset($_SESSION["name"])) {?>
                <h3 class="text-center">Login</h3>
                <form action="" method="post">
                    <div class="mb-3">
                        <input type="text" name="username" id="" placeholder="Username" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="passwword" name="password" id="" placeholder="Passoword" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Login" class="bg-success btn text-light" name="login">
                    </div>
                </form>
                <?= $errmsg ?? null ?>
                <?= $msg ?? null ?>
                <?php } else {?>
                    <h2 class="text-center">
                        Welcome <?= $_SESSION["name"]?>
                    </h2>
                    <table class="table">
                        <tr>
                            <td>Your Information</td>
                        </tr>
                        <tr class="bg-success">
                            <td class="text-light">Blood Group : </td>
                            <td class="text-light">A Positive </td>
                        </tr>
                        <tr class="bg-success">
                            <td class="text-light">Contact : </td>
                            <td class="text-light">0177777777 </td>
                        </tr>
                        <tr class="bg-success">
                            <td class="text-light">Address : </td>
                            <td class="text-light">Noakhali </td>
                        </tr>
                        <tr class="bg-success">
                            <td class="text-light">Last Donation Date : </td>
                            <td class="text-light">10 OCT 2022 </td>
                        </tr>
                        <tr class="bg-success">
                            <td class="text-light">Total Donation : </td>
                            <td class="text-light">15 Times </td>
                        </tr>

                    </table>
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