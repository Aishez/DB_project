<?php
include './Database.php';

$s = mysqli_query($con, "select * from company");
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




    <div class="container mt-5 pt-5">
        <h3> Number of students placed : </h3>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Company : </label>
                        <select class="form-select" name="company" aria-label="Default select example">
                            <option selected value="default">--none--</option>
                            <?php
                            while ($r = mysqli_fetch_array($s)) {
                                $company_name = $r['Name'];
                            ?>
                                <option value=" <?php echo $company_name ?> "> <?php echo $r['Name'];  ?> </option>

                            <?php
                            }
                            ?>
                        </select>
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Year : </label>
                        <select class="form-select" name="year" aria-label="Default select example">
                            <option selected value="default">--Year--</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                        </select>
                    </div>

                </div>

                <div class="col-md-4">

                    <?php

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $company = $_POST['company'];
                        $year = $_POST['year'];

                        $s = null;
                        $sql = "select * from student where Placed_in ='$company' and Batch = '$year' ";
                        $s = mysqli_query($con, $sql);
                        // echo mysqli_num_rows($que);
                    }
                    ?>

                    <div class="badge bg-light text-wrap" style="height:70%;  width: 100%; margin-left: 25%; padding-top :6%; margin-top: 5%;">
                        <div class="ans" style="color: black; font-size:15px">
                            Number of Students = <?php echo mysqli_num_rows($s);  ?>
                        </div>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Show lists
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php
                                while ($r = mysqli_fetch_array($s)) {
                                    $Roll_no = $r['Roll_no'];
                                ?>
                                    <li><a class="dropdown-item" href="#"> <?php echo $r['Roll_no'];  ?> </a></li>

                                <?php
                                }
                                ?>  
                            </ul>
                        </li>

                    </div>




                </div>



            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>



    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>