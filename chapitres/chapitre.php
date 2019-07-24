<?php
require('../model/Chapitres.php');
  $read = new Chapters();
  $req = $read->getFullChapter($_GET['n']);
  $post = $req;

  require('../templates/post.php');
?>