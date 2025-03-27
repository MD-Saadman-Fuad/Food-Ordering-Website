<?php include('../config/constants.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login - Food Ordering Website</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>

    <div style="border: 1px solid grey; margin: 10% auto; width: 20%; padding: 2%;">
        <h1 class="text-center">Login</h1>
        <br>
        <?php
        if (isset($_SESSION['login'])) {
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }
        if (isset($_SESSION['no-login-msg'])) {
            echo $_SESSION['no-login-msg'];
            unset($_SESSION['no-login-msg']);
        }

        
        ?>
        <form action="" method="post" class="text-center">
            Username :
            <br>
            <input type="text" name="user_name" placeholder="Enter Username">
            <br><br>
            Password :
            <br>
            <input type="Password" name="password" placeholder="Enter Password">
            <br><br>

            <input type="submit" name="submit" value="Login" class="btn-primary">
        </form>
        <br>




        <p class="text-center">Created by - <a href="#">Saadman Fuad</a></p>
    </div>




</body>

</html>

<?php

if (isset($_POST['submit'])) {
    $user_name = $_POST['user_name'];
    $password = md5($_POST['password']);


    $sql = "SELECT * FROM admin WHERE user_name='$user_name'and password='$password'";
    $res = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($res);

    if ($count == 1) {
        $_SESSION['login'] = "<div class='green'> Login Successful! </div>";
        $_SESSION['user'] = $user_name;
        header('location:' . SITEURL . 'admin/');
    } else {
        $_SESSION['login'] = "<div class='red text-center'> Username and Password Didn't Match! </div>";
        header('location:' . SITEURL . 'admin/login.php');
    }
}









?>