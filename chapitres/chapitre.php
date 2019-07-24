<?php
require('../model/Chapitres.php');
  $read = new Chapters();
  $req = $read->getFullChapter($_GET['n']);
  $post = $req;

        
  require('../model/Commentaires.php');
  $read = new CommentManager();
  $req = $read->getComments($_GET['n']);
  $comments = $req;

  require('../templates/post.php');
?>