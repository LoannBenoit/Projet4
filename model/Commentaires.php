<?php
class CommentManager 
{
  public function getComments($postId)
  {
      $db = $this->dbConnect();
      $comments = $this->$db->prepare('SELECT * FROM commentaires WHERE id = ? ORDER BY id');
      $comments->execute(array($postId));

      return $comments;
  }

  public function postComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO commentaire(post_id, author, comment, comment_date) VALUES(?, ?, ?, NOW())');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }

    private $bdd;
    function __construct()
    {
      try
      {
        $this->bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', 'root');
      }
      catch (Exception $e)
      {
              die('Erreur : ' . $e->getMessage());
      }
    }
}