<?php 
    $title = "Un billet pour l'Alaska | Accueil";
    
    require('../model/Chapitres.php');
        $read = new Chapters();
        $req = $read->getChapters();
        
    require('../templates/accueil.php');
    require('../templates/form.php');


