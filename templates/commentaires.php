<?php while ($comment = $comments->fetch()) { ?>
        <div class="comment">
          <h3 class="commentName"><?php echo $comment['name'];?></h3>
          <p class="commentContent"><?php echo $comment['content']?></p>
          <a class="waves-effect waves-light btn-small red report right">Signaler</a>
          <div class="separator"></div>
        </div>
        <?php } ?>