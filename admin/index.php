<?php 
$title = "Admin | Un billet pour l'Alaska";

require('../model/Chapitres.php');
  $read = new Chapters();
  $req = $read->getChapters($_GET['n']);


require('../templates/admin.php');