<?php
require('bdd.php');

class Articles
{
    public $article;
    public $id_utilisateur;
    public $id_categorie;

    public function __construct($article, $id_utilisateur, $id_categorie)
    {
        $this->article = $article;
        $this->id_utilisateur = $id_utilisateur;
        $this->id_categorie = $id_categorie;
    }

    public function newArticle($bdd)
    {

        $newArticle = $bdd->prepare("INSERT INTO articles (article, id_utilisateur) VALUES(?,?)");

        if (empty($this->article)) {
            echo 'Champ Article Vide';
        } elseif (empty($this->id_categorie)) {
            echo 'Veuillez choisir une ou plusieurs catégories';
        } else {
            $newArticle->execute([$this->article, $this->id_utilisateur]);
            
            $articleInfo = $bdd->prepare("SELECT articles.id, articles.article FROM articles INNER JOIN utilisateurs ON articles.id_utilisateur = utilisateurs.id WHERE utilisateurs.id = $this->id_utilisateur ORDER BY articles.id DESC");
            $articleInfo->execute();
            $result = $articleInfo->fetch(PDO::FETCH_ASSOC);
            // var_dump($result);
            $liaison = $bdd->prepare("INSERT INTO liaison (id_article, id_categorie) VALUES(?,?)");
            for ($i = 0; $i < count($_POST['cat']); $i++) {

                $liaison->execute([$result['id'], $this->id_categorie[$i]]);
            }
        }

        // $newArticle = $bdd->prepare("INSERT INTO articles (article, id_utilisateur) VALUES(?,?)");

        // $articleInfo = $bdd->prepare("SELECT articles.id, articles.article FROM articles INNER JOIN utilisateurs ON articles.id_utilisateur = utilisateurs.id WHERE utilisateurs.id = $this->id_utilisateur ORDER BY articles.id DESC");
        // $articleInfo->execute();
        // $result = $articleInfo->fetch(PDO::FETCH_ASSOC);
        // var_dump($result);

        // $liaison = $bdd->prepare("INSERT INTO liaison (id_article, id_categorie) VALUES(?,?)");
        // for ($i = 0; $i < count($_POST['cat']); $i++) {

        //     $liaison->execute([$result['id'], $_POST['cat'][$i]]);
        // }

        // header('Location:articles.php');
    }


    public function getAllinfo($bdd)
    {
        if (isset($_GET['order'])) {

            if ($_GET['order'] == 'ASC') {
                $order = 'DESC';
            } elseif ($_GET['order'] == 'DESC') {
                $order = 'ASC';
            }
        } else {
            $order = 'DESC';
        }

        $recupArticle = $bdd->prepare("SELECT articles.id , article, utilisateurs.login FROM articles INNER JOIN utilisateurs ON articles.id_utilisateur = utilisateurs.id ORDER BY articles.id $order");
        $recupArticle->execute();
        $result = $recupArticle->fetchAll(PDO::FETCH_ASSOC);

        return [$result, $order];
        // var_dump($result);
    }
}
// $article = new Articles('fje', '1111');
// $article->getAllinfo();

// WHERE utilisateurs.id = $this->id_utilisateur