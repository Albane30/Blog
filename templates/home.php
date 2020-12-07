<?php

require '../vendor/autoload.php';

use App\src\DAO\ArticleDAO;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Mon blog</title>
</head>

<body>
<div>
    <h1>Mon blog</h1>
    <p>En construction</p>
    
    <?php
    $article = new ArticleDAO();
    $articles = $article->getArticles();
    while($article = $articles->fetch()){
        ?>
        <div>
            <h2><?= htmlspecialchars($article->title_article);?></h2>
            <p>Créé le : <?= htmlspecialchars($article->createdAt);?></p>
            <p><?= htmlspecialchars($article->content);?></p>
            <p><?= htmlspecialchars($article->author);?></p>
            <a href="single.php?articleId=<?= htmlspecialchars($article->id_articles);?>">Lire la suite</a>
        </div>
        <br>
        <?php
    }
    $articles->closeCursor();
    
    ?>
</div>
</body>
</html>