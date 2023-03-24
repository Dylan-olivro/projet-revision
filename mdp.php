<?php
require_once('./class/User.php');
require_once('function.php');
require_once('bdd.php');

// session_destroy();
if (!isset($_SESSION['user'])) {
    header('Location:index.php');
}

// var_dump($_SESSION['user']);
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
            <label for="password">Password</label>
            <input type="password" name="password">
            <label for="new_password">New Password</label>
            <input type="password" name="new_password">
            <input type="submit" name="submit" class="input">

            <?php
            if (isset($_POST['submit'])) {
                $user = new User($_SESSION['user']->id, '', password_hash($_POST['new_password'], PASSWORD_DEFAULT), '', '', '');
                $user->updatePassword($bdd);
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