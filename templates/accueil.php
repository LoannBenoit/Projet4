<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/materialize.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title><?php echo $title ?></title>
</head>

<body>

  
    <div class="background">
      <img src="../images/background.jpg" alt="background">
      <div class="homeTitle"><h1>Billet Simple pour l'Alaska</h1></div>
    </div>
    
    <div id="content" class="col s12">
    <div class="row">
    <div class="chapter">
      <div class="chaptersTitle"><h2>Derniers Chapitres</h2></div>
        <div class="lightBack">
          <?php require('../templates/chapitres.php'); ?>
        </div>
      </div>
    </div>
    </div>
    

    <div class="row">
      <div class="more">
        <div class="moreTitle"><h2>A Propos</h2></div>
        <img class="photoJF" src="../images/Photo_ronde.png" alt="Photo Jean Forteroche">
        <div class="lightBack">
        <div class="moreText">
          <p>Je m'appelle Jean Forteroche, je suis acteur et écrivain. Je travail actuelement sur un gros projet, mon livre : 
              Billet Simple pour l'Alaska. Ce livre n'a pas vocation à être publié de manière traditionnelle. Je souhaite le poster ici,
              chaque chapitre les uns à la suite des autres, gratuitement, pour que bon nombre de mes lecteurs puissent y avoir accès.
              Vous pouvez laisser des commentaires sous les postes pour me donner votre avis et me laisser des critiques constructives.

              <br><br> /!\ Attention /!\ <br>
              Tout abus sera sanctionné. Il vous est aussi possible de signaler les commentaires que vous jugerez indésirable. 
              Il n'y a aucunement besoin de vous créer un compte, le site est ouvert à tous.

              <br><br>Je vous souhaite bonne continuation sur mon site, au plaisir de vous lire,

            <br><br>Jean.</p>
        </div>
      </div>
    </div>
    </div>
    



  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="../js/materialize.min.js"></script>
  <script src="../js/index.js"></script>
</body>
</html>