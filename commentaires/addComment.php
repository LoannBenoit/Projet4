<?php

header('../chapitres/chapitre.php?n=' . $_GET['n']);
  $bdd;
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

      $req = $this->$bdd->query("INSERT INTO commentaires(name, content, idChapitres) VALUES('Loann', 'test', '1')");
    
      return $req;