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
        <div class="row">
            <div class="col-md-6">
                <form action="" method="post">
                    <div class="mb-3 form-floating">
                        <input type="text" placeholder="Your Name" name="uname" class="form-control">
                        <label for="">Your Name</label>
                    </div>
                    <div class="mb-3 form-floating">
                        <input type="text" placeholder="Your Email" name="uemail" class="form-control">
                        <label for="">Your Email</label>
                    </div>
                    <div class="mb-3 form-floating">
                        <input type="password" placeholder="Your Password" name="upass" class="form-control">
                        <label for="">Your Password</label>
                    </div>
                    <div class="mb-3">
                        Gender :
                        <div class="form-check form-check-inline">
                            <input type="radio" name="dorimon" value="Male" class="form-check-input">
                            <label for="" class="form-check-label">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="dorimon" value="Female" class="form-check-input">
                            <label for="" class="form-check-label">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="dorimon" value="Others" class="form-check-input">
                            <label for="" class="form-check-label">Tiktoker</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        Quota :
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="qta" value="Women" class="form-check-input">
                            <label for="" class="form-check-label">Women</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="qta" value="Tribe" class="form-check-input">
                            <label for="" class="form-check-label">Tribe</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="qta" value="Disabled" class="form-check-input">
                            <label for="" class="form-check-label">Disabled</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" name="qta" value="Freedom Fighter" class="form-check-input">
                            <label for="" class="form-check-label">Freedom Fighter</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        Profile Picture :
                        <input type="file">
                    </div>
                    <div class="mb-3">
                        DOB :
                        <input type="date" class="form-control">
                    </div>
                    <div class="mb-3">
                        <select name="" id="" class="form-control">
                            <option value="">--SELECT COUNTRY--</option>
                            <option value="bd">Bangladesh</option>
                            <option value="in">India</option>
                            <option value="pk">Pakistan</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <textarea name="" id="" cols="50" rows="5" placeholder="Your Comment" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Sign-in">
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <table class="table table-dark table-striped table-hover">
                    <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Name</th>
                            <th>City</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Ashraful</td>
                            <td>Bhrammonbaria</td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Chinmoy</td>
                            <td>Kustia</td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>Sadia</td>
                            <td>Sherpur</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>