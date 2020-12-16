<?php $this->title = "Article"; ?>

    <h1>Mon blog</h1>
   
    <div>
        <h2><?= htmlspecialchars($article->getTitle());?></h2>
        <p><?= htmlspecialchars($article->getContent());?></p>
        <p><?= htmlspecialchars($article->getAuthor());?></p>
        <p>Créé le : <?= htmlspecialchars($article->getCreatedAt());?></p>
    </div>
    <br>
  
        <a href="../public/index.php">Retour à l'accueil</a>

        <div id="comments" >
        <h3>Commentaires</h3>
        <?php
       
       foreach ($comments as $comment)
        {
            ?>
            <h4><?= htmlspecialchars($comment->getPseudo());?></h4>
            <p>Posté le <?= htmlspecialchars($comment->getCreatedAt());?></p>
            <p><?= htmlspecialchars($comment->getContent());?></p>
            <?php
        }
        
        ?>
    </div>
