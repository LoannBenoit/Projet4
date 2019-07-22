<?php while ($data = $req->fetch()) { ?>
  <div class="separator"></div>
  <div class="chapterPart">
    <h3 class="chapterAmount"><?php echo $data['name']; ?></h3>
    <p class="publishDate">Publié le <?php echo $data['published']; ?></p>
    <p class="truncate"><?php echo $data['text']; ?></p>
    <a href="../chapitres/chapitre.php?<?php echo $data['id']; ?>" class="waves-effect waves-teal btn-flat readMore">Lire la suite</a>
  </div>
<?php }?>