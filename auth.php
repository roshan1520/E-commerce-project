<?php
session_start();

// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'flipkart';

// Establish database connection
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (!$con) {
    exit("Database Connection Failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["s_name"];
    $username = $_POST["username"];
    $password = $_POST["s_password"];
    $email = $_POST["s_email"];
    $cpassword = $_POST["cpassword"];
    $phone = $_POST["s_phone"];

    // Check if username already exists
    $sql = "SELECT * FROM accounts WHERE username = ?";
    $stmt = mysqli_prepare($con, $sql);

    if (!$stmt) {
        exit("SQL Prepare Failed: " . mysqli_error($con));
    }

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $num = mysqli_num_rows($result);
    mysqli_stmt_close($stmt);

    if ($num == 0) {
        if ($password === $cpassword) {
            // Hash the password before storing


            // Insert new user data
            $sql = "INSERT INTO accounts (username, password, email, name, phone,registered) VALUES (?, ?, ?, ?, ?,current_timestamp())";
            $stmt = mysqli_prepare($con, $sql);

            if (!$stmt) {
                exit("SQL Prepare Failed: " . mysqli_error($con));
            }

            mysqli_stmt_bind_param($stmt, "sssss", $username, $password, $email, $name, $phone);
            $result = mysqli_stmt_execute($stmt);

            if (!$result) {
                exit("SQL Execution Failed: " . mysqli_error($con));
            }

            mysqli_stmt_close($stmt);

            // Redirect to login page with success message
            header("Location: login.php");
            exit();
        } else {
            exit("Passwords do not match!");
        }
    } else {
        exit("Username not available!");
    }
}
