<?php 
$title = "Un billet pour l'Alaska | Admin";

require('../model/Chapitres.php');
  $read = new Chapters();
  $req = $read->getChapters();

require('../templates/admin.php');