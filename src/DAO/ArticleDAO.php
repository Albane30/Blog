<?php
namespace App\src\DAO;
class ArticleDAO extends DAO
{
    public function getArticles()
    {
       
        $sql="SELECT id_articles, title_article, createdAt, author, content FROM articles ORDER BY id_articles DESC";
        return $this->createQuery($sql);
    }

    public function getArticle($articleId)
    {
        
        $sql="SELECT id_articles, title_article, createdAt, author, content FROM articles WHERE id_articles = ?";
        
        return $this->createQuery($sql, [$articleId]);
       
    }
}
