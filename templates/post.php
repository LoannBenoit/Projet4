<head>
  <link rel="stylesheet" href="../css/materialize.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

<div class="lightBack">
  <a class="backHome waves-effect waves-light btn" href="../home/"><i class="material-icons left">arrow_back</i> Retouner à l'Accueil</a>
<div class="chapterPart">
  <h3 class="chapterAmount"><?php echo $post['name']; 
  ?></h3>
  <p class="publishDate">Publié le <?php echo $post['published']; ?></p>
  <p class="text"><?php echo $post['text']; ?></p>
</div>
</div>
</body>
