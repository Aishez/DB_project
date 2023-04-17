<?php
include '../Database.php';

$s = mysqli_query($con, "select * from company");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Register</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- customised CSS -->
    <link rel="stylesheet" href="../style.css">

    <!-- cdn for fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body style="background-image: linear-gradient(90deg , skyblue , rgb(145, 71, 241));">


    <!-- Registration form -->

    <div class="container mt-4 pt-5" id="register" style="display: none;">
        <h2 style="text-align:center;">Registration</h2>
        <div class="row">
            <form method="post" action="./register.php">

                <h3>Personal Information</h3>
                <div class="row">
                    <div class="mb-3 col-md-4">
                        <label for="exampleInputPassword1" class="form-label">Name : </label>
                        <input type="text" name="name" class="form-control" id="Input1">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="exampleInputPassword1" class="form-label">Roll No : </label>
                        <input type="text" name="roll" class="form-control" id="InputX1">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="exampleInputPassword1" class="form-label">Email : </label>
                        <input type="email" name="email" class="form-control" id="InputX1">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-4">
                        <label for="exampleInputPassword1" class="form-label">Mobile No : </label>
                        <input type="number" name="mobile" class="form-control" id="Input1">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="exampleInputPassword1" class="form-label">Age : </label>
                        <input type="number" name="age" class="form-control" id="InputX1">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="exampleInputPassword1" class="form-label">Batch of : </label>
                        <input type="number" name="batch" class="form-control" id="InputX1">
                    </div>
                </div>

                <h3> Academic Details</h3>

                <div class="row">
                    <div class="mb-3 col-md-4">
                        <label for="exampleInputPassword1" class="form-label">Class 10th : </label>
                        <input type="number" name="class10" class="form-control" id="Input1">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="exampleInputPassword1" class="form-label">Class 12th : </label>
                        <input type="number" name="class12" class="form-control" id="InputX1">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="exampleInputPassword1" class="form-label">CPI : </label>
                        <input type="number" name="cpi" class="form-control" id="InputX1">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-4">
                        <label for="exampleInputPassword1" class="form-label">Specialisation : </label>
                        <input type="text" name="specialisation" class="form-control" id="Input1">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="exampleInputPassword1" class="form-label">Area of Interest : </label>
                        <input type="text" name="aoi" class="form-control" id="InputX1">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="exampleInputPassword1" class="form-label">Placed Company : </label>
                        <select class="form-select" name="placed" aria-label="Default select example">
                            <option selected>--none--</option>
                            <?php
                                while($r = mysqli_fetch_array($s) )
                                {
                                    $company_name = $r['Name'];
                            ?>
                                    <option value=" <?php echo $company_name ?> "> <?php echo $r['Name'];  ?>  </option>

                            <?php
                                }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="exampleInputPassword1" class="form-label">Password : </label>
                        <input type="password" name="password" class="form-control" id="Input1">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="exampleInputPassword1" class="form-label">Confirm Password : </label>
                        <input type="password" name="cpassword" class="form-control" id="InputX1">
                    </div>
                </div>



                <button type="reset" class="btn btn-primary mt-5">Clear</button>
                <button type="submit" name="submit" value="submit" class="btn btn-primary mt-5 ms-5">Submit</button>
                <!--  Error will come when we submit the form  -->
            </form>
        </div>
    </div>


    <!-- Login Form -->

    <div class="container mt-5 pb-5" id="login" style="display: block;">
        <h2 style="margin-left: 51%;">Login Form</h2><br>
        <div class="row">

            <div class="col-md-6">
                <div class="feedback_img">
                    <img class="login-img" src="../images/logo.svg" width="50%" alt="Error" style="margin-left: 25%;">
                </div>
            </div>

            <div class="col-md-6">
                <form name="Login" method="post" action="./login.php">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Roll No</label>
                        <input type="text" name="roll2" class="form-control" id="email1">
                    </div>


                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Password </label>
                        <input type="password" name="password2" class="form-control" id="password1">
                    </div>

                    <button type="button" onclick="register()" class="btn btn-primary me-5">Register</button>
                    <button type="submit" name="submit2" class="btn btn-primary ms-5 mt-1">Submit</button>
                    <!--  Error will come when we submit the form  -->
                </form>

            </div>

        </div>
    </div>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Customised JS -->
    <script src="../main.js"></script>

</body>

</html>