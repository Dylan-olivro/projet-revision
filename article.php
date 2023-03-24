<?php
require_once('bdd.php');
require_once('./class/User.php');
require_once('./class/article-object.php');
require_once('function.php');
// session_destroy();

if (!isset($_SESSION['user'])) {
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
            <label for="article">Article</label>
            <input type="text" id="article" name="article" autofocus id="article">
            <div>
                <label for="horreur">Horreur</label>
                <input type="checkbox" value="1" name="cat[]" id="horreur">

            </div>
            <div>
                <label for="aventure">Aventure</label>
                <input type="checkbox" value="2" name="cat[]" id="aventure">
            </div>
            <div>
                <label for="action">Action</label>
                <input type="checkbox" value="3" name="cat[]" id="action">
            </div>

            <input type="submit" name="submit" class="input">
            <?php

            if (isset($_POST['submit'])) {
                // if (isset($_POST['cat'])) {
                if (empty($_POST['cat'])) {
                    $article = new Articles($_POST['article'], $_SESSION['user']->id, []);
                } else {
                    $article = new Articles($_POST['article'], $_SESSION['user']->id, $_POST['cat']);
                }
                $article->newArticle($bdd);
                // $article->getAllinfo($bdd);
                // }
            }

            ?>

        </form>
    </main>
</body>
<style>
    form {
        display: flex;
        flex-direction: column;
        text-align: center;
        border: 1px solid;
        margin: 20px 0;
        padding: 30px;
    }

    label {
        font-size: 1.5rem;
    }

    #article {
        margin-bottom: 10px;
    }

    .input {
        color: #f1b16a;
        padding: 5px;
        background-color: #121a2e;
        margin-top: 10px;
    }
</style>

</html>