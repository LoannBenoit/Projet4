<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/materialize.min.css">
  <link rel="stylesheet" href="../css/admin.css">
  <title><?php echo $title ?></title>
</head>

<body>

  <div class="nav-content">
    <ul class="tabs">
      <li class="tab"><a href="#chapitres" class='active'>Chapitres</a></li>
      <li class="tab"><a href="#test2">Commentaires</a></li>
      <li class="tab"><a class="waves-effect waves-teal btn-flat">Se déconnecter</a></li>
    </ul>

    <div id="chapitres">
    <div class="lightBack">
          <?php require('../templates/chapitres.php'); ?>
        </div>
    </div>

    <div id="test2">
      <h1>Test 2</h1>
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