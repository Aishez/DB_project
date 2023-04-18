<?php

session_start();

include '../Database.php';

// $roll2 = $_SESSION['roll2'];
// $password2 = $_SESSION['password2'];

error_reporting(E_ERROR | E_PARSE);

$sql = $_SESSION['sql'];
// $_SESSION['sql'] = $sql;



$que = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($que);


$name = $row['Name'];
$CTC = $row['Package'];
$since = $row['Since'];
$mode = $row['Mode'];
$cpi = $row['CPI'];
$password = $row['password'];




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

            <div class="col-md-4">
                <div class="feedback_img" style="justify-content: center;">
                    <img class="login-img" src="../images/company.png" width="50%" alt="Error" style="margin-left: 25%;">
                </div>
            </div>

            <div class="col-md-8 mt-5">

                <div class="row">
                    <div class="col-md-4">
                        <h5>Package </h5>
                        <h5>Since </h5>
                        <h5>Mode of Interview </h5>
                        <h5>CPI criteria (>=) </h5>
                    </div>
                    <div class="col-md-4">
                        <h5> : </h5>    
                        <h5> : </h5>
                        <h5> : </h5>
                        <h5> : </h5>
                    </div>

                    <div class="col-md-4">
                        <h5> <?php echo $CTC ?> </h5>
                        <h5> <?php echo $since ?> </h5>
                        <h5> <?php echo $mode ?> </h5>
                        <h5> <?php echo $cpi ?> </h5>
                        


                    </div>
                </div>

                <?php
                session_start();

                $_SESSION['name'] = $name;
                $_SESSION['password'] = $password;
                ?>


                <a href="./edit.php">
                    <button type="button" class="btn btn-info mt-3 ms-1 " style="padding: 6px 25px;">Edit</button>
                </a>

                <a href="./delete.php">
                    <button type="button" class="btn btn-danger mt-3 ms-5">Delete</button>
                </a>
                <a href="../query.php">
                    <button type="button" class="btn btn-warning mt-3 ms-5">Query</button>
                </a>


            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>