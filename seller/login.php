<?php

session_start();

if (isset($_SESSION['account_loggedin_seller'])) {
    header('Location: index.php');
    exit;
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flipkart-Login</title>
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
            /* border: 1px solid black; */
        }

        .login1 {
            background-color: blue;
            color: white;
            height: 500px;
            width: 80%;
            padding: 50px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            line-height: 30px;
        }

        .login2 {
            width: 80%;
            height: 60%;
            padding: 10%;

        }

        .login2 input {
            border: none;
            padding: 10px;
            margin: 10px;
            width: 100%;
            height: 40px;
            border-bottom: 1px solid black;
            font-size: 20px;
        }

        .btn-login {
            background-color: blue;
            border: none;
            padding: 10px;
            margin: 10px;
            width: 100%;
            height: 40px;
            color: white;
            cursor: pointer;
            border-radius: 20px;
        }

        .btn-login:hover {
            font-size: 20px;
            height: 50px;
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
    <div class="main">
        <div class="login1">
            <h1>Flipkart Login</h1>
            <h2>Sellers</h2>
            <p>Get access to your Orders, <br> Wishlist and <br>Recommendations</p>

        </div>
        <div class="login2">
            <form action="./auth_seller.php" method="post">
                <input type="text" class="l-username" placeholder="Email/Mobile number" name="username"><br>
                <input type="password" class="l-password" placeholder="Password" name="password">
                <button class="btn-login">Login</button>
            </form>
            <div class="f-c"> <a href="">Forget Password</a> <a href="./sign_up.php">Create an Account</a></div>

        </div>
    </div>
</body>

</html>