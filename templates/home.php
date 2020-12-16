<?php $this->title = "Accueil"; ?>


    <h1>Mon blog</h1>
    <p>En construction</p>
    <a href="../public/index.php?route=addArticle">Nouvel article</a>
    <?php
    
    foreach ($articles as $article){
    
        ?>
        <div>
            <h2><?= htmlspecialchars($article->getTitle());?></h2>
            <p>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></p>
            <p><?= htmlspecialchars($article->getContent());?></p>
            <p><?= htmlspecialchars($article->getAuthor());?></p>
            <a href="../public/index.php?route=article&articleId=<?= htmlspecialchars($article->getId());?>">Lire la suite</a>
        </div>
        <br>
        <?php
    }
    
    ?>
