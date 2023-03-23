<?php
require_once('./class/User.php');
require_once('function.php');
require_once('header.php');

// session_destroy();
?>
<header>
    <nav>
        <a href="./index.php">Index</a>
        <a href="./articles.php">Articles</a>
        <a href="./score.php">Score</a>
        <a href="https://github.com/Dylan-olivro">Github</a>

        <?php

        if (isset($_SESSION['user'])) { ?>
            <a href="./article.php">Article</a>
            <a href="./jeux.php">Jeux</a>
            <a href="./profil.php">Profil</a>
            <a href="./deco.php">Deco</a>
        <?php } else { ?>
            <a href="./connexion.php">Connexion</a>
            <a href="./inscription.php">Inscription</a>
        <?php } ?>
    </nav>
</header>