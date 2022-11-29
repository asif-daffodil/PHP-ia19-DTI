<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
</head>

<body>
    <div class="container">
        <?php
        $selectArr = ["--Select City--" => "", "Barishal" => "Barishal", "Noyakhali" => "Noyakhali", "Bhrammonbaria" => "Bhrammonbaria", "Others" => "Others"];

        $conn = mysqli_connect("localhost", "root", "", "dtiwordcup");
        if (isset($_POST["offside"])) {
            $fname = safuda($_POST["fname"]);
            $lname = safuda($_POST["lname"]);
            $city = safuda($_POST["city"]);
            $team = safuda($_POST["team"]);
            $preid = safuda($_POST["preid"]);
            $name = "$fname $lname";

            $updateQuery = "UPDATE `students` SET `name` = '$name', `city` = '$city', `team` = '$team' WHERE `id` = $preid";
            $update = $conn->query($updateQuery);
            if (!$update) {
                echo "<script>toastr.error('Student update hoynai')</script>";
            } else {
                echo "<script>toastr.success('Student update hoise'); setTimeout(()=>{location.href='index.php'}, 2000)</script>";
            }
        }

        function safuda($data)
        {
            $data = htmlspecialchars($data);
            $data = trim($data);
            $data = stripslashes($data);
            return $data;
        }

        $id = $_GET["id"] ?? header("location: ./index.php");
        $getPreDataQuery = "SELECT * FROM `students` WHERE `id` = $id";
        $getPreData = $conn->query($getPreDataQuery);
        $getPreData->num_rows != 1 && header("location: ./index.php");
        $preData = $getPreData->fetch_object();
        $nameArr = explode(" ", $preData->name);
        $fanme = $nameArr[0];
        $lname = "";
        for ($i = 0; $i < count($nameArr); $i++) {
            if ($i != 0) {
                $lname .= "$nameArr[$i] ";
            }
        }
        $lname = trim($lname);
        ?>
        <div class="row min-vh-100 d-flex">
            <div class="col-md-5 m-auto p-4 border rounded shadow">
                <h3 class="mb-3">Update Student</h3>
                <form action="" method="post" class="row g-3">
                    <input type="hidden" value="<?= $preData->id ?>" name="preid">
                    <div class="col-md-6">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" name="fname" value="<?= $fanme ?? null ?>" required />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="lname" value="<?= $lname ?? null ?>" required />
                    </div>
                    <div class="col-12">
                        <label class="form-label">City</label>
                        <select class="form-select" name="city" required>
                            <option value="<?= $preData->city ?>"><?= $preData->city ?></option>
                            <?php foreach ($selectArr as $key => $val)
                                if ($val != $preData->city) { { ?>
                                    <option value="<?= $val ?>"><?= $key ?></option>
                            <?php }
                                } ?>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Team</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="team" value="Brazil" required <?= $preData->team == "Brazil" ? "checked" : null ?> />
                            <label class="form-check-label" for="inlineRadio1">Brazil</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="team" value="Argentina" required <?= $preData->team == "Argentina" ? "checked" : null ?> />
                            <label class="form-check-label" for="inlineRadio2">Argentina</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" name="offside">Update Student</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>