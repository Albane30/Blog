<?php
namespace App\src\DAO;
class CommentDAO extends DAO
{
    public function getCommentsFromArticle($articleId)
    {
        $sql = 'SELECT id_comment, username_user, comment, createdAt FROM comments WHERE id_articles = ? ORDER BY createdAt DESC';
        return $this->createQuery($sql, [$articleId]);
    }
}