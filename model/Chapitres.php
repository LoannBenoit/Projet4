<?php
class Chapters  
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

  public function getChapters()
  {
    
    $req = $this->bdd->query('SELECT *, DATE_FORMAT(published, "%d/%m/%Y") AS published FROM chapitres');

    return $req;
  }
}