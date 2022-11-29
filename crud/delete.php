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
        $conn = mysqli_connect("localhost", "root", "", "dtiwordcup");
        if (isset($_POST["offside"])) {
            $preid = safuda($_POST["preid"]);
            $deleteQuery = "DELETE FROM `students` WHERE `id` = $preid";
            $delete = $conn->query($deleteQuery);
            if (!$delete) {
                echo "<script>toastr.error('Student delete hoynai')</script>";
            } else {
                echo "<script>toastr.success('Student delete hoise'); setTimeout(()=>{location.href='index.php'}, 2000)</script>";
            }
        }

        function safuda($data)
        {
            $data = htmlspecialchars($data);
            $data = trim($data);
            $data = stripslashes($data);
            return $data;
        }
        ?>
        <div class="row min-vh-100 d-flex">
            <div class="col-md-5 m-auto p-4 border rounded shadow">
                <h3 class="mb-3">Do you realy want to delete the student?</h3>
                <a href="./index.php" class="btn btn-primary">No</a>
                <form action="" method="post" class="d-inline">
                    <input type="hidden" value="<?= $_GET['id'] ?>" name="preid">
                    <button type="submit" class="btn btn-danger" name="offside">Yes</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>