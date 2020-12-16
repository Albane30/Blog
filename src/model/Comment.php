<?php

namespace App\src\model;

class Comment
{
      /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $pseudo;

    /**
     * @var string
     */
    private $content;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id_comment;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id_comment = $id;
    }

    /**
     * @return string
     */
    public function getPseudo()
    {
        return $this->username_user;
    }

    /**
     * @param string $pseudo
     */
    public function setPseudo($pseudo)
    {
        $this->username_user = $pseudo;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->comment;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->comment = $content;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }
}