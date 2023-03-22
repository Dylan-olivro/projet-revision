<?php
require_once('./class/User.php');
require_once('function.php');
require_once('header.php');

// session_destroy();
?>
<header>
    <nav>
        <a href="./index.php">Index</a>
        <a href="./articles.php">articles</a>

        <?php

        if (isset($_SESSION['user'])) { ?>
            <a href="./article.php">article</a>
            <a href="./jeux.php">Jeux</a>
            <a href="./profil.php">Profil</a>
            <a href="./deco.php">Deco</a>
        <?php } else { ?>
            <a href="./connexion.php">connexion</a>
            <a href="./inscription.php">inscription</a>
        <?php } ?>
    </nav>
</header>