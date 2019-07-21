<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/materialize.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <title><?php echo $title ?></title>
</head>

<body>

  <div class="nav-content">
    <ul class="tabs">
    <li class="tab" ><a class="active" href="#accueil">Accueil</a></li>
      <li class="tab"><a href="#chapitres">Chapitres</a></li>
      <li class="tab"><a href="">Commentaires</a></li>
      <li class="tab"><a href="" class="active">Se déconnecter</a></li>
    </ul>
  </div>

  <div id="accueil" class="col s12">
    <?php require('accueil.php')?>
  </div>


  </body>
  </html>