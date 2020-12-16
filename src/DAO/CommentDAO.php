<?php
namespace App\src\DAO;

use App\src\model\Comment;

class CommentDAO extends DAO
{
    private function buildObject($row)
    {
        $comment = new Comment();
        $comment->setId($row['id_comment']);
        $comment->setPseudo($row['username_user']);
        $comment->setContent($row['comment']);
        $comment->setCreatedAt($row['createdAt']);
        return $comment;
    }

    public function getCommentsFromArticle($articleId)
    {
        $sql = 'SELECT id_comment, username_user, comment, createdAt FROM comments WHERE id_articles = ? ORDER BY createdAt DESC';
        $result = $this->createQuery($sql, [$articleId]);
        $comments = [];
        foreach ($result as $row) {
            $commentId = $row['id_comment'];
            $comments[$commentId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $comments;
    }
}