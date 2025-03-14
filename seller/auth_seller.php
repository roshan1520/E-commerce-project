
<?php

session_start();

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'flipkart';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_errno()) {

    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if (!isset($_POST['username'], $_POST['password'])) {

    exit('Please fill both the username and password fields!');
}

if ($stmt = $con->prepare('SELECT id, password FROM seller WHERE username = ?')) {

    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();

    $stmt->store_result();


    if ($stmt->num_rows > 0) {

        $stmt->bind_result($id, $password);
        $stmt->fetch();

        if ($_POST['password'] === $password) {

            session_regenerate_id();

            $_SESSION['account_loggedin_seller'] = TRUE;
            $_SESSION['account_name'] = $_POST['username'];
            $_SESSION['account_id'] = $id;

            header('Location: index.php');
            exit;
        } else {

            echo 'Incorrect username and/or password!';
        }
    } else {

        echo 'Incorrect username and/or password!';
    }


    $stmt->close();
}
?>