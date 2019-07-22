<?php
class Comments  
{
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

  public function getComments()
  {
    
    $req = $this->bdd->query('SELECT * FROM commentaires');

    return $req;
  }
}