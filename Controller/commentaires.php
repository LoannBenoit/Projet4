<?php
require('model/Commentaires.php');

function getComments($idChapitre)
{
  $read = new CommentManager();
  $req = $read->getComments($idChapitre);
  $comments = $req;
}

function postComment()
{
  $read = new CommentManager();
  $req = $read->postComment($postId, $name, $content);
  header('Location: ../home/');
}