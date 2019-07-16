<?php
class Chapters  
{
  private function dbConnect()
  {
    try
    {
      $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', 'root');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
  }

  public function getChapters()
  {
    $db = $this->dbConnect();
    $req = $bdd->query('SELECT * DATE_FORMAT(published, \'%d/%m/%Y\') AS published FROM chapitres ORDER BY id DESC');

    return $req;
  }
}