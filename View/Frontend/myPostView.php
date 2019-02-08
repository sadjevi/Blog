<?php $title = "post" ?>

<?php ob_start(); ?>


<div class="blog">
    <div class="row medium-10 large-9 columns">
        <div class="blog-postview">
            <p> + + + + </p>
            <h3><?php echo $post['title'] . '<br><small> le ' . $post['posted_date']; ?></small></h3>
            <img class="thumbnail" src="<?php echo $post['img_link'];?>">
            <p><?php echo $post['content']; ?></p>
            <div class="empty">
            </div>
         </div>
    </div>
</div>

<!-- comments -->
<div class="comment-section-container">
  <h3>Commentaires </h3>
  <?php while ($comment = $comments->fetch())
    {
    ?>
  <div class="comment-section-author">
    <img src="Public/images/mbr.png">
    <div class="comment-section-name">
      <p><strong><?= htmlspecialchars($comment['author'])?></strong></p>
      <p><em> le <?= $comment['comment_date'] ?></em></p>
    </div>
  </div>
  <div class="comment-section-text">
    <p><?= htmlspecialchars($comment['content'])?></p>
  </div>
  <?php
    }?>
</div>
<!--/comments-->


<!-- comment form -->
<form class="comment-section-form" action="index.php?action=addComment&amp;id=<?=$post['id'] ?>" method="post">
  <div class="comment-section-box">
    <div class="row">
      <div class="small-12 column">
        <h4>Un commentaire...!?</h4>
        <label> Nom / Pseudo
          <input type="text" name="author">
        </label>
        <label>Commentaire
          <textarea rows="7" type="text" name="content"></textarea>
        </label>
        <button class="button expanded">Envoyer</button>
      </div>
    </div>
  </div>
</form>
<!--/comment box-->


<?php $content = ob_get_clean(); ?>

<?php require('template.php');