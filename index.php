<?php
require_once('./class/User.php');
require_once('function.php');
require_once('bdd.php');

// var_dump($_SESSION);
// session_destroy();
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
    <?php require_once('header.php');
    // var_dump($_SESSION);
    // var_dump(unserialize($_SESSION['user']));
    // unset($_SESSION['user']);
    ?>
    <main>
        <section>
            <h1>ACCUEIL</h1>
        </section>
    </main>
</body>
<style>
    h1 {
        font-size: 5rem;
        text-align: center;
        color: #121a2e;
    }
</style>

</html>