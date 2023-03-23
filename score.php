<?php
require('./class/card.php');
require_once('./class/User.php');
require_once('function.php');
require_once('bdd.php');
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
    <?php require_once('header.php') ?>
    <main>
        <form action="" method="post">
            <select name="level" id="">
                <option value="3">3 paires</option>
                <option value="6">6 paires</option>
                <option value=12">12 paires</option>
            </select>
            <input type="submit" name="submit">
        </form>
        <table>
            <thead>
                <tr>
                    <th>Login</th>
                    <th>Level</th>
                    <th>Score</th>
                </tr>
            </thead>

            <tbody>
                <?php
                if (!isset($_POST['level'])) {
                    $_POST['level'] = 3;
                }
                $request = $bdd->prepare("SELECT * FROM userscore INNER JOIN utilisateurs ON utilisateurs.id = userscore.id_utilisateur WHERE level = ? ORDER BY score DESC");
                $request->execute([$_POST['level']]);
                $result = $request->fetchAll(PDO::FETCH_ASSOC);
                // var_dump($result);
                if (isset($_POST['level'])) {
                    foreach ($result as $key) : ?>
                        <tr>
                            <td><?= $key['login']  ?></td>
                            <td><?= $key['level'] ?> paires</td>
                            <td><?= $key['score'] ?></td>
                        </tr>
                    <?php endforeach ?>
                <?php
                }
                ?>

            </tbody>

        </table>

    </main>
</body>
<style>
    form {
        margin-top: 20px;
    }

    input {
        color: #f1b16a;
        padding: 5px;
        background-color: #121a2e;

    }

    select {
        color: #f1b16a;
        padding: 5px;
        background-color: #121a2e;

    }

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
</style>

</html>