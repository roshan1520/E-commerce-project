<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flipkart-SignUp</title>
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

        .btn-signup {
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

        .btn-signup:hover {
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
            <h1>Flipkart Forget Password</h1>
            <p>Get access to your Orders, <br> Wishlist and <br>Recommendations</p>

        </div>
        <div class="login2">
            <form action="" method="post">

                <input type="email" name="s_email" placeholder="Enter Your Email" required>
                <input type="phone" name="s_phone" placeholder="Enter Your Phone Number" required>
                <input type="password" placeholder="Enter Password" name="s_password" required> <br>
                <input type="password" placeholder="Confirm Password" name="s_cpassword" required> <br>
                <button class="btn-signup">Set Password</button>
            </form>
            <div class="f-c"> <a href="">Go To Log In</a> </div>

        </div>
    </div>
</body>

</html>