<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page </title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- customised CSS -->
    <link rel="stylesheet" href="../style.css">

    <!-- cdn for fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body style="background-image: linear-gradient(90deg , skyblue , rgb(145, 71, 241));">


    <!-- Registration form -->

    <div class="container mt-4 pt-5" id="register">
        <h2 style="text-align:center;">Enter New details</h2>
        <div class="row">
            <form method="post" action="./editprocess.php">

                <h3>Personal Information</h3>
                <div class="row">
                    <div class="mb-3 col-md-4">
                        <label for="exampleInputPassword1" class="form-label">Name : </label>
                        <input type="text" name="name" class="form-control" id="Input1">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="exampleInputPassword1" class="form-label">Roll No : </label>
                        <input type="text" name="roll" class="form-control" id="InputX1" placeholder="Cannnot be change">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="exampleInputPassword1" class="form-label">Email : </label>
                        <input type="email" name="email" class="form-control" id="InputX1">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-4">
                        <label for="exampleInputPassword1" class="form-label">Batch of : </label>
                        <input type="number" name="batch" class="form-control" id="Input1">
                    </div>
                </div>

                <h3> Company details</h3>

                <div class="row">
                    <div class="mb-3 col-md-4">
                        <label for="exampleInputPassword1" class="form-label">Company name : </label>
                        <input type="text" name="company_name" class="form-control" id="Input1">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="exampleInputPassword1" class="form-label">ctc : </label>
                        <input type="number" name="ctc" class="form-control" id="InputX1">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="exampleInputPassword1" class="form-label">working tenure : </label>
                        <input type="number" name="working_tenure" class="form-control" id="InputX1">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-4">
                        <label for="exampleInputPassword1" class="form-label">area : </label>
                        <input type="text" name="area" class="form-control" id="Input1">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="exampleInputPassword1" class="form-label">position : </label>
                        <input type="text" name="position" class="form-control" id="InputX1">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="exampleInputPassword1" class="form-label">location : </label>
                        <input type="text" name="location" class="form-control" id="InputX1">
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
                <button type="submit" name="submit2" class="btn btn-primary mt-5 ms-5">Submit</button>
                <!--  Error will come when we submit the form  -->
            </form>
        </div>
    </div>




    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Customised JS -->
    <script src="../main.js"></script>

</body>

</html>