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
      $fname = safuda($_POST["fname"]);
      $lname = safuda($_POST["lname"]);
      $city = safuda($_POST["city"]);
      $team = safuda($_POST["team"]);
      $name = "$fname $lname";

      $insertQuery = "INSERT INTO `students` (`name`, `city`, `team`) VALUES ('$name', '$city', '$team')";
      $insert = $conn->query($insertQuery);
      if (!$insert) {
        echo "<script>toastr.error('Student add hoynai')</script>";
      } else {
        echo "<script>toastr.success('Student add hoise')</script>";
      }
    }

    function safuda($data)
    {
      $data = htmlspecialchars($data);
      $data = trim($data);
      $data = stripslashes($data);
      return $data;
    }

    $selectQuery = "SELECT * FROM `students`";
    $select = $conn->query($selectQuery);

    $pageNo = $_GET["pageNo"] ?? header("location: ./index.php?pageNo=1");
    $totalStudent = $select->num_rows;
    $studentPerPage = 5;
    $totalPage = ceil($totalStudent / $studentPerPage);
    $startPoint = ($pageNo - 1) * $studentPerPage;

    $paginationQuery = "SELECT * FROM `students` ORDER BY `id` DESC LIMIT $startPoint, $studentPerPage";
    $pagination = $conn->query($paginationQuery);
    ?>
    <div class="row min-vh-100 d-flex">
      <div class="col-md-6 border-end border-dark py-2">
        <h3 class="mb-3">Add Student</h3>
        <form action="" method="post" class="row g-3">
          <div class="col-md-6">
            <label class="form-label">First Name</label>
            <input type="text" class="form-control" name="fname" required />
          </div>
          <div class="col-md-6">
            <label class="form-label">Last Name</label>
            <input type="text" class="form-control" name="lname" required />
          </div>
          <div class="col-12">
            <label class="form-label">City</label>
            <select class="form-select" name="city" required>
              <option value="">--Select City--</option>
              <option value="Barishal">Barishal</option>
              <option value="Noyakhali">Noyakhali</option>
              <option value="Bhrammonbaria">Bhrammonbaria</option>
              <option value="Others">Others</option>
            </select>
          </div>
          <div class="col-12">
            <label for="inputAddress2" class="form-label">Team</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="team" value="Brazil" required />
              <label class="form-check-label" for="inlineRadio1">Brazil</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="team" value="Argentina" required />
              <label class="form-check-label" for="inlineRadio2">Argentina</label>
            </div>
          </div>

          <div class="col-12">
            <button type="submit" class="btn btn-primary" name="offside">Add Student</button>
          </div>
        </form>
      </div>
      <div class="col-md-6">
        <?php if ($select->num_rows > 0) { ?>
          <table class="table table-light table-striped table-hover">
            <tr>
              <th>S.N.</th>
              <th>Name</th>
              <th>City</th>
              <th>Team</th>
              <th>Action</th>
            </tr>
            <?php $sn = $startPoint + 1;
            while ($data = $pagination->fetch_object()) { ?>
              <tr>
                <td><?= $sn; ?></td>
                <td><?= $data->name ?></td>
                <td><?= $data->city ?></td>
                <td><?= $data->team ?></td>
                <td>
                  <a href="./update.php?id=<?= $data->id ?>" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                  <a href="./delete.php?id=<?= $data->id ?>" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                </td>
              </tr>
            <?php $sn++;
            } ?>
          </table>
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item"><a class="page-link" href="./index.php?pageNo=<?= $pageNo != 1 ? $pageNo - 1 : 1 ?>">Previous</a></li>
              <?php
              for ($i = 1; $i <= $totalPage; $i++) {
              ?>
                <li class="page-item <?= $pageNo == $i ? 'active' : null ?>"><a class="page-link" href="./index.php?pageNo=<?= $i ?>"><?= $i ?></a></li>
              <?php } ?>
              <li class="page-item"><a class="page-link" href="./index.php?pageNo=<?= $pageNo != $totalPage ? $pageNo + 1 : $totalPage ?>">Next</a></li>
            </ul>
          </nav>
        <?php } ?>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>