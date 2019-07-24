<?php
class CommentManager 
{
  private $bdd;
  function __construct()
  {
    try
    {
      $this->$bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', 'root');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
  }

  public function getComments($postId)
  {
      $req = $this->$bdd->prepare("SELECT * FROM commentaires WHERE idChapitres = $postId");
      $req->execute(array($postId));

      return $req;
  }

  public function postComment($postId, $author, $comment)
    {

        $req = $this->$bdd->prepare('INSERT INTO commentaires(idChapitre, name, content) VALUES(?, ?, ?)');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }

  
}