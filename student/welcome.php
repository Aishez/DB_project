<?php

session_start();

include '../Database.php';

$sql = $_SESSION['sql'];
$que = mysqli_query($con,$sql);
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
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">


</head>

<body style="background-image: linear-gradient(90deg ,white,skyblue);">


    
    <?php   echo "Name : $name"  ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>