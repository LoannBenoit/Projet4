<?php while ($data = $req->feth()) { ?>
           <div class="separator"></div>
           <div class="chapterPart">
             <h3 class="chapterAmount"><?php echo $data['name']; ?></h3>
             <p class="publishDate">Publié le <?php echo $data['date']; ?></p>
             <p class="truncate"><?php echo $data['text']; ?></p>
             <button class="readMore">Lire la suite</button>
           </div>
        <?php } ?>