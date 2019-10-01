<head>
  <link rel="stylesheet" href="../css/materialize.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
  <div class="row ">
    <div class="lightBack">
      <a class="waves-effect waves-light btn-flat backHome" href="../home/"><i class="material-icons left">arrow_back</i>Retouner à l'Accueil</a>
      <div class="chapterPart">
        <h3 class="chapterAmount"><?php echo $post['name']; 
        ?></h3>
        <p class="publishDate">Publié le <?php echo $post['published']; ?></p>
        <p class="postText"><?php echo $post['text']; ?></p>
      </div>
    </div>
  </div>

  <div class="row">
  <div class="commentSection">
    <div class="lightBack">
      <h2 class="commentTitle">Commentaires</h2>
      <div class="separator"></div>
        <?php while ($comment = $comments->fetch()) { ?>
        <div class="comment">
          <h3 class="commentName"><?php echo $comment['name'];?></h3>
          <p class="commentContent"><?php echo $comment['content']?></p>
          <a class="waves-effect waves-light btn-small red report right">Signaler</a>
          <div class="separator"></div>
        </div>
        <?php } ?>
      </div>
        
        

        <div class="row addComment">
          <div class="lightBack">
            <form id="commentForm" class="col s12" action="../chapitres/chapitres.php?n=<?php echo $_GET['n']?>" method="post">
              <div class="row">
                <div class="input-field col s12">
                  <input id="name" type="text" name="name">
                  <label for="name">NOM</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <textarea id="commentText" name="commentText" class="materialize-textarea"></textarea>
                  <label class="txtAreaLabel" for="commentText">COMMENTAIRE</label>
                </div>
              </div>
              <div class="row submitComment">
                <button class="btn waves-effect waves-light right-align sendComment" type="submit" name="action">Envoyer</button>
              </div>
            </form>
          </div>
        </div>
        
        


        <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="../js/materialize.min.js"></script>
  <script src="../js/index.js"></script>
      </div>
    </div>
  </div>
</body>