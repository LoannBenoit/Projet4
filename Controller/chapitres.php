<?php
require('model/Chapitres.php');

function getChapters()
{
    $read = new Chapters();
    $req = $read->getChapters();
    require('templates/accueil.php');
    require('templates/form.php');
}

function getFullChapters($idChapitre)
{
  
  $read = new Chapters();
  $req = $read->getFullChapter($idChapitre);
  $post = $req;
  require('templates/post.php');
}

  
?>