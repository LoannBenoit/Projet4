<?php while ($data = $req->fetch()) { ?>
  <div class="separator"></div>
  <div class="chapterPart">
    <h3 class="chapterAmount"><?php echo $data['name']; ?></h3>
    <p class="publishDate">Publié le <?php echo $data['published']; ?></p>
    <p class="truncate"><?php echo $data['text']; ?></p>
    <a href="../index.php?action=fullChapters&n=<?php echo $data['id']; ?>" class="waves-effect waves-light btn-flat readMore">Lire la suite</a>
  </div>
<?php }?>