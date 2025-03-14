<?php

session_start();

if (isset($_SESSION['account_loggedin'])) {
    header('Location: index.php');
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flipkart-SignUp</title>
    <link
        rel="stylesheet"
        href="./node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <link
        rel="stylesheet"
        href="./node_modules/bootstrap-icons/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="./src/css/style.css" />
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .main {
            border-radius: 20px;
            margin-top: 50px;
            display: flex;
            width: 50%;
            height: 600px;
            align-items: center;
            margin-left: auto;
            margin-right: auto;
            box-shadow: 2px 2px 12px 2px grey;
            background-color: white;
            /* border: 1px solid black; */

        }

        .login1 {
            background-color: blue;
            color: white;
            height: 600px;
            width: 80%;
            padding: 50px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            line-height: 30px;
            margin: 0px;

        }

        .login2 {
            width: 80%;
            height: 60%;
            padding: 10%;
            margin: 0px;
            padding: 0px;

        }

        .login2 input {
            border: none;
            padding: 10px;
            margin: 10px;
            width: 90%;
            height: 40px;
            border-bottom: 1px solid black;
            font-size: 20px;
            background-color: white;
            border-radius: 0px;
        }

        .btn-signup {
            background-color: blue;
            border: none;
            padding: 10px;
            margin: 10px;
            width: 90%;
            height: 40px;
            color: white;
            cursor: pointer;
            border-radius: 20px;

        }

        .btn-signup:hover {
            font-size: 20px;
            height: 50px;
            position: relative;
        }

        .f-c {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
            font-size: 16px;
            width: 100%;

        }

        .f-c a {
            color: blue;
        }

        .f-c a:hover {
            color: tomato;
            font-size: 20px;
            position: relative;
        }

        input:focus {
            outline: none;
        }
    </style>
</head>

<body>
    <?php
    include('nav.php');
    ?>
    <div class="main">
        <div class="login1">
            <h1>Flipkart Sign Up</h1>
            <p>Get access to your Orders, <br> Wishlist and <br>Recommendations</p>

        </div>
        <div class="login2">
            <form action="./auth.php" method="post">
                <input type="text" name="s_name" placeholder="Enter Your Name" required><br>
                <input type="text" name="username" placeholder="Enter Your Username" required><br>
                <input type="email" name="s_email" placeholder="Enter Your Email" required>
                <input type="phone" name="s_phone" placeholder="Enter Your Phone Number" required>
                <input type="password" placeholder="Enter Password" name="s_password" required> <br>
                <input type="password" placeholder="Confirm Password" name="cpassword" required>
                <button class="btn-signup">Sign Up</button>
            </form>
            <div class="f-c"> <a href="">Already have an account</a> </div>

        </div>
    </div>
</body>

</html>