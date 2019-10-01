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

  public function getComments($idChapitre)
  {
      $req = $this->$bdd->prepare("SELECT * FROM commentaires WHERE idChapitres = '$idChapitre'");
      $req->execute(array($idChapitre));

      return $req;

  }
  
 
  public function postComment($name, $commentText, $postId)
  {

      $req = $this->$bdd->prepare("INSERT INTO commentaires(name, content, idChapitres) VALUES(:name, :commentText, :postId)");
      $req->bindParam(':name', $name);
      $req->bindParam(':commentText', $commentText);
      $req->bindParam(':postId', $postId);
   
      $req->execute();
  
    }

}