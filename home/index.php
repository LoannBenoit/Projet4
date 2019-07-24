<?php 
    $title = "Accueil | Un billet pour l'Alaska";
    
    require('../model/Chapitres.php');
        $read = new Chapters();
        $req = $read->getChapters();
        

    require('../templates/accueil.php');
    require('../templates/form.php');