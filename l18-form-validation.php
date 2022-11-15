<?php
include_once("./hayderCountry.php");

$genderList = ["Male", "Female"];
$quataList = ["Disabled", "Women", "Tribe", "Freedom Fighter"];

if (isset($_POST["sign123"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'] ?? null;
    $quata = $_POST['quata'] ?? [];
    $country = $_POST['country'];

    if (empty($name)) {
        $errName = "<span style='color: red'>Please write your name</span>";
    } elseif (!preg_match('/^[A-Za-z. ]*$/', $name)) {
        $errName = "<span style='color: red'>Invalid name</span>";
    }

    if (empty($email)) {
        $errEmail = "<span style='color: red'>Please write your email address</span>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errEmail = "<span style='color: red'>Invalid email address</span>";
    }

    if (empty($phone)) {
        $errPhone = "<span style='color: red'>Please write your mobile number</span>";
    } elseif (!filter_var(intval($phone), FILTER_VALIDATE_INT)) {
        $errPhone = "<span style='color: red'>Invalid mobile number</span>";
    }

    if (empty($gender)) {
        $errGender =
            "<span style='color: red'>Please select your gender</span>";
    } elseif (!in_array($gender, $genderList)) {
        $errGender =
            "<span style='color: red'>Hacking possible na!</span>";
    }

    if (empty($quata)) {
        $errQuata =
            "<span style='color: red'>Please select a quata!</span>";
    }

    if (empty($country)) {
        $errCountry =
            "<span style='color: red'>Please select a country!</span>";
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
        <div class="row min-vh-100">
            <div class="col-md-7 m-auto border p-4">
                <h2 class="mb-3">Sign-up Form</h2>
                <form action="" method="post">
                    <div class="mb-3">
                        <input type="text" placeholder="Your Name" name="name" value="<?= $name ?? null ?>" class="form-control <?= isset($errName) ? 'is-invalid' : null ?>">
                        <?= $errName ?? null ?>
                    </div>
                    <div class="mb-3">
                        <input type="text" placeholder="Your Email" name="email" value="<?= $email ?? null ?>" class="form-control">
                        <?= $errEmail ?? null ?>
                    </div>
                    <div class="mb-3">
                        <input type=" text" placeholder="Phone Number" name="phone" value="<?= $phone ?? null ?>" class="form-control">
                        <?= $errPhone ?? null ?>
                    </div>
                    <div class="mb-3">
                        <div class="form-check form-check-inline">
                            <label for="" class="form-check-lebel">Gender :</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="gender" value="Male" <?= isset($gender) && $gender == "Male" ? "checked" : null ?> class="form-check-input">
                            <label for="" class="form-check-lebel">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="gender" value="Female" <?= isset($gender) && $gender == "Female" ? "checked" : null ?> class="form-check-input">
                            <label for="" class="form-check-lebel">Female</label>
                        </div>
                        <?= $errGender ?? null ?>
                    </div>
                    <div class="mb-3">
                        <div class="form-check form-check-inline">
                            Quata :
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="quata[]" value="Disabled" <?= isset($quata) && in_array("Disabled", $quata) ? "checked" : null ?> class="form-check-input">
                            <label for="" class="form-check-lebel">
                                Disabled
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="quata[]" value="Women" <?= isset($quata) && in_array("Women", $quata) ? "checked" : null ?> class="form-check-input">
                            <label for="" class="form-check-lebel">
                                Women
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="quata[]" value="Tribe" <?= isset($quata) && in_array("Tribe", $quata) ? "checked" : null ?> class="form-check-input">
                            <label for="" class="form-check-lebel">
                                Tribe
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="quata[]" value="Freedom Fighter" <?= isset($quata) && in_array("Freedom Fighter", $quata) ? "checked" : null ?> class="form-check-input">
                            <label for="" class="form-check-lebel">
                                Freedom Fighter
                            </label>
                        </div>
                        <?= $errQuata ?? null ?>
                    </div>
                    <div class="mb-3">
                        <select name="country" id="" class="form-control">
                            <option value="">--SELECT COUNTRY--</option>
                            <?php foreach ($cList as $cl) { ?>
                                <option value="<?= $cl; ?>"><?= $cl; ?></option>
                            <?php  } ?>
                        </select>
                        <?= $errCountry ?? null ?>
                    </div>
                    <button type="submit" name="sign123" class="btn btn-primary">Sign Up</button>
                </form>
            </div>
        </div>
    </div>


</body>

</html>