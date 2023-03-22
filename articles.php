<?php
require_once('./class/User.php');
require_once('./class/article-object.php');
require_once('function.php');
require_once('bdd.php');

// session_destroy();
$article = new Articles('', '', '');
$array = $article->getAllinfo($bdd);
// var_dump($array);

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
        <table>
            <thead>
                <tr>
                    <th>id_article</th>
                    <th>Login</th>
                    <th>Article</th>
                    <th>Catégorie</th>
                </tr>
            </thead>

            <tbody>
                <?php
                foreach ($array[0] as $key) : ?>
                    <tr>
                        <td><?= $key['id_article']  ?></td>
                        <td><?= $key['login']  ?></td>
                        <td><?= $key['article'] ?></td>
                        <td><?= $key['categorieTitle'] ?></td>
                    </tr>
                <?php endforeach ?>

            </tbody>

        </table>

        <form action="" method="get">
            <input type="submit" value="<?= $array[1] ?>" name="order">
        </form>

    </main>
</body>
<style>
    table {
        margin: 20px 0;
    }

    table,
    td,
    th {
        border: 1px solid;
        border-collapse: collapse;
    }

    td,
    th {
        padding: 5px;
        text-align: center;
    }

    th {
        color: #e74153;
        border-color: #000;
    }

    input {
        color: #f1b16a;
        padding: 5px;
        background-color: #121a2e;
    }
</style>

</html>