<?php
$idChapitre = $_GET['n'];
require('Controller/chapitres.php');

if (isset($_GET['action'])) {
  if ($_GET['action'] == 'chapters') {

    getChapters();
    
  } elseif ($_GET['action'] == 'fullChapters') {
    if (isset($idChapitre) && $idChapitre > 0) {
      require('Controller/commentaires.php');
      getFullChapters($idChapitre);
      $comments = getComments($idChapitre);
      
      require('templates/post.php');
      
    } else {
      echo "Erreur, aucun identifiant de billet n'a été envoyé.";
    }
    
  } else {
    require('Controller/chapitres.php');
   
  }
  
} else {
  header('Location: /home/');
}