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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>



    <div class="container mt-5 pt-5">
        <h3>1. Number of students placed : </h3>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >

            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <select class="form-select" name="company" aria-label="Default select example">
                            <option selected>--Company--</option>
                            <option value="Google">Google</option>
                            <option value="Microsoft">Microsoft</option>
                            <option value="Amazon">Amazon</option>
                        </select>
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="mb-3">
                        <select class="form-select" name="year" aria-label="Default select example">
                            <option selected>--Year--</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                        </select>
                    </div>

                </div>

                <div class="col-md-4">
                    <!-- <div class="mb-3">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>ct menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div> -->

                </div>

            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>




</body>

</html>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {    
        $company = $_POST['company'];
        $year = $_POST['year'];

        $sql = "SELECT COUNT(*) AS num_students_placed from allums WHERE allums.Name = $company AND allums.Batch = $year";

        $que=mysqli_query($con,$sql);

        echo mysqli_num_rows($que);
    }


?>