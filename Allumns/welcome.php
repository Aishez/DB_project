<?php

session_start();

include '../Database.php';

// $roll2 = $_SESSION['roll2'];
// $password2 = $_SESSION['password2'];

error_reporting(E_ERROR | E_PARSE);

$sql = $_SESSION['sql'];


$que = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($que);


$name = $row['Name'];
$roll = $row['Roll_no'];
$email = $row['Email'];
$mobile = $row['Mobile'];
$age = $row['Age'];
$batch = $row['Batch'];
$class10 = $row['class10'];
$class12 = $row['class12'];
$cpi = $row['cpi'];
$specialisation = $row['Specialisation'];
$aoi = $row['AOI'];
$class10 = $row['Package'];





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">


</head>

<body style="background-image: linear-gradient(90deg ,white,skyblue);">

    <div class="container mt-5 pb-5" id="login" style="display: block;">
        <h1 style="margin-left: 51%;"> <?php echo $name ?> </h1><br>
        <div class="row">

            <div class="col-md-6">
                <div class="feedback_img">
                    <img class="login-img" src="../images/logo.svg" width="50%" alt="Error" style="margin-left: 25%;">
                </div>
            </div>

            <div class="col-md-6 mt-5">

                <div class="row">
                    <div class="col-md-4">
                        <h5>Roll No. </h5>
                        <h5>Email </h5>
                        <h5>Mob no. </h5>
                        <h5>age </h5>
                        <h5>batch year </h5>
                        <h5>CPI </h5>

                        
                    </div>
                    <div class="col-md-4">
                        <h5> : </h5>
                        <h5> : </h5>
                        <h5> : </h5>
                        <h5> : </h5>
                        <h5> : </h5>
                        <h5> : </h5>
                    </div>

                    <div class="col-md-4">
                        <h5> <?php echo $roll ?> </h5>
                        <h5> <?php echo $email ?> </h5>
                        <h5> <?php echo $mobile ?> </h5>
                        <h5> <?php echo $age ?> </h5>
                        <h5> <?php echo $batch ?> </h5>
                        <h5> <?php echo $cpi ?> </h5>

                        
                    </div>
                </div>

                <button type="button" class="btn btn-info">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>