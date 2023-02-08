<?php

    @include 'config.php';
    session_start();

    if(!isset($_SESSION['admin_name'])){
        header('location:login_form.php');
    }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="content">
            <h3> hi,<span>admin</span> </h3>
            <h1>welcome <span>
                <?php
                echo $_SESSION['admin_name']
                ?>
            </span></h1>
            <p>this is admin page</p>
            <a href="login_from.php" class="btn">Login</a>
            <a href="register.php" class="btn">Register</a>
            <a href="Logout.php" class="btn">Log out</a>

        </div>
    </div>
</body>
</html>