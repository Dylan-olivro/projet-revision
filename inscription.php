<?php
require_once('./class/User.php');
require_once('function.php');
require_once('bdd.php');

// session_destroy();

if (isset($_SESSION['user'])) {
    header('Location:index.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/common.css">
    <title>Document</title>
</head>

<body>
    <?php require_once('header.php'); ?>
    <main>
        <form action="" method="post">
            <label for="login">Login</label>
            <input type="text" id="login" name="login" autofocus>
            <label for="email">Email</label>
            <input type="text" id="email" name="email">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <label for="confirm_password">Confirm password</label>
            <input type="password" id="confirm_password" name="confirm_password">
            <label for="firstname">Firstname</label>
            <input type="text" id="firstname" name="firstname">
            <label for="lastname">Lastname</label>
            <input type="text" id="lastname" name="lastname">
            <input type="submit" name="submit" class="input">
            <?php

            if (isset($_POST['submit'])) {
                $user = new User('', $_POST['login'], $_POST['password'], $_POST['email'],  $_POST['firstname'], $_POST['lastname']);
                $user->register($bdd);
            }
            ?>
        </form>
    </main>
</body>
<style>
    form {
        display: flex;
        flex-direction: column;
    }

    .input {
        color: #f1b16a;
        padding: 5px;
        background-color: #121a2e;
        margin-top: 10px;
    }

    label {
        font-size: 1.5rem;

    }
</style>

</html>