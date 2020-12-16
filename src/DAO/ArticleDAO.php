<?php
namespace App\src\DAO;

use App\src\model\Article;

class ArticleDAO extends DAO
{   
    private function buildObject($row)
    {
        $article = new Article();
        $article->setId($row['id_articles']);
        $article->setTitle($row['title_article']);
        $article->setContent($row['content']);
        $article->setAuthor($row['author']);
        $article->setCreatedAt($row['createdAt']);
        return $article;
    }
    public function getArticles()
    {
       
        $sql="SELECT id_articles, title_article, createdAt, author, content FROM articles ORDER BY id_articles DESC";
        $result = $this->createQuery($sql);
        $articles = [];
        foreach ($result as $row){
            $articleId = $row['id_articles'];
            $articles[$articleId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $articles;
    }

    public function getArticle($articleId)
    {
        
        $sql="SELECT id_articles, title_article, createdAt, author, content FROM articles WHERE id_articles = ?";
        
        $result = $this->createQuery($sql, [$articleId]);
        $article = $result->fetch();
        $result->closeCursor();
        return $this->buildObject($article);
       
    }
    public function addArticle($article)
    {
        //Permet de récupérer les variables $title, $content et $author
        extract($article);
        $sql = 'INSERT INTO articles (title_article, content, author, createdAt) VALUES (?, ?, ?, NOW())';
        $this->createQuery($sql, [$title, $content, $author]);
    }
}
