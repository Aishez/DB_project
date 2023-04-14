<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginRegister</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <style>
        /* ===== Google Font Import - Poppins ===== */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #4070f4;
        }

        .container {
            position: relative;
            max-width: 900px;
            width: 80%;
            /* 80% for login */
            border-radius: 10px;
            padding: 30px;
            margin: 0 15px;
            background-color: #fff;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        .container header {
            position: relative;
            font-size: 20px;
            font-weight: 600;
            color: #333;
            justify-content: center;
        }

        .container header::before {
            content: "";
            position: absolute;
            left: 0;
            bottom: -2px;
            height: 3px;
            width: 27px;
            border-radius: 8px;
            background-color: #4070f4;
        }

        .container form {
            position: relative;
            margin-top: 16px;
            min-height: 490px;
            background-color: #fff;
            overflow: hidden;
        }

        .container form .form {
            position: absolute;
            background-color: #fff;
            transition: 0.3s ease;
        }

        .container form .form.second {
            opacity: 0;
            pointer-events: none;
            transform: translateX(100%);
        }

        form.secActive .form.second {
            opacity: 1;
            pointer-events: auto;
            transform: translateX(0);
        }

        form.secActive .form.first {
            opacity: 0;
            pointer-events: none;
            transform: translateX(-100%);
        }

        .container form .title {
            display: block;
            margin-bottom: 8px;
            font-size: 16px;
            font-weight: 500;
            margin: 6px 0;
            color: #333;
        }

        .container form .fields {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        form .fields .input-field {
            display: flex;
            width: calc(100% / 3 - 15px);
            /* Changed 3 -> 2 for login*/
            flex-direction: column;
            margin: 4px 0;
        }


        .input-field label {
            font-size: 12px;
            font-weight: 500;
            color: #2e2e2e;
        }

        .input-field input,
        select {
            outline: none;
            font-size: 14px;
            font-weight: 400;
            color: #333;
            border-radius: 5px;
            border: 1px solid #aaa;
            padding: 0 15px;
            height: 42px;
            margin: 8px 0;
        }

        .input-field input :focus,
        .input-field select:focus {
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.13);
        }

        .input-field select,
        .input-field input[type="date"] {
            color: #707070;
        }

        .input-field input[type="date"]:valid {
            color: #333;
        }

        .container form button,
        .backBtn {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 45px;
            max-width: 200px;
            width: 100%;
            border: none;
            outline: none;
            color: #fff;
            border-radius: 5px;
            margin: 25px 0;
            background-color: #4070f4;
            transition: all 0.3s linear;
            cursor: pointer;
        }

        .container form .btnText {
            font-size: 14px;
            font-weight: 400;
        }

        form button:hover {
            background-color: #265df2;
        }

        form button i,
        form .backBtn i {
            margin: 0 6px;
        }

        form .backBtn i {
            transform: rotate(180deg);
        }

        form .buttons {
            display: flex;
            align-items: center;
        }

        form .buttons button,
        .backBtn {
            margin-right: 14px;
        }


        @media (max-width: 750px) {
            .container form {
                overflow-y: scroll;
            }

            .container form::-webkit-scrollbar {
                display: none;
            }

            form .fields .input-field {
                width: calc(100% / 2 - 15px);
            }
        }

        @media (max-width: 550px) {
            form .fields .input-field {
                width: 100%;
            }
        }
    </style>


</head>

<body>

    <!-- Login Form  -->

    <div class="container" style="display: block;" id="login">
        <header style="color: white;">Login</header>
        <form action="#">
            <div class="">
                <div class="details personal">
                    <span class="title">Login Credentials</span>

                    <div class="">

                        <div class="input-field">
                            <label>Roll Number</label>
                            <input type="text" placeholder="Enter Roll no." required>
                        </div>
                        
                        <div class="input-field">
                            <label>Password</label>
                            <input type="password" placeholder="Enter your password" required>
                        </div>

                    </div>
                </div>


                <div class="row">
                    <button type="submit" class="submit ms-3">
                        <span class="btnText">Submit</span>
                        <i class="uil uil-navigator"></i>
                    </button>
    
                    
                    <button type="button"  onclick="register()" style="margin-left: 50%;">Register</button>

                </div>

            </div>
        </form>
    </div>


    <!-- Registration form -->

    <div class="container" style="display: none;" id="register">
        <header style="color: white;">Registration</header>
        <form  method="post" action="./register.php">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" name="name"  placeholder="Enter your name" required>
                        </div>

                        <div class="input-field">
                            <label>Roll Number</label>
                            <input type="text" name="roll"  placeholder="Enter Roll no." required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" name="email"  placeholder="Enter your email" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" name="mobile"  placeholder="Enter mobile number" required>
                        </div>

                        <div class="input-field">
                            <label>Age</label>
                            <input type="number" name="age"  placeholder="Enter your age" required>
                        </div>
                        
                        <div class="input-field">
                            <label>Batch of</label>
                            <input type="number" name="batch"  placeholder="Passing year" required>
                        </div>
                        

                    </div>
                </div>

                <div class="details ID">
                    <span class="title">Academic Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Class 10th</label>
                            <input type="number" name="class10"  placeholder="Percentage" required>
                        </div>

                        <div class="input-field">
                            <label>Class 12th</label>
                            <input type="number" class="12"  placeholder="Percentage" required>
                        </div>

                        <div class="input-field">
                            <label>CPI</label>
                            <input type="number" name="cpi"  placeholder="Current CPI" required>
                        </div>

                        <div class="input-field">
                            <label>Specialisation</label>
                            <input type="text" name="specialisation"  placeholder="Enter your specialisation" required>
                        </div>

                        <div class="input-field">
                            <label>Area of intrest</label>
                            <input type="text" name="aoi"  placeholder="Enter area of interest" required>
                        </div>

                        <div class="input-field">
                            <label>Package(LPA)</label>
                            <input type="number" name="lpa"  placeholder="Enter your package" required>
                        </div>

                        
                        <div class="input-field">
                            <label>Package(LPA)</label>
                            <input type="number" name="lpa"  placeholder="Enter your package" required>
                        </div>

                    </div>

                    <button type="submit" class="nextBtn" name="submit" value="submit">
                        <span class="btnText">Submit</span>
                    </button>

                    <button type="button"  onclick="register()" style="margin-left: 50%;">Register</button>

                </div>
            </div>
        </form>
    </div>


    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../main.js"></script>

</body>

</html>