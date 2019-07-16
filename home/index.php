<?php 
    $title = "Un billet pour l'Alaska | Accueil";
    require('../model/Chapitres.php');

    function readChapters()
    {
        $req = getChapters();
    }

    require('../templates/accueil.php');