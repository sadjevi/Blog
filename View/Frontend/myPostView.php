<?php $title = "post" ?>

<?php ob_start(); ?>

<div class="post">

    <div class="post_title">
        <h2>
            <?= htmlspecialchars($post['title'])?>
            <em>  le <?= $post['posted_date'] ?></em>
        </h2>
    </div>

    <div class="post_content">
        <p>
            <?= htmlspecialchars($post['content'])?>
        </p>
    </div>

</div>

<?php while ($comment = $comments->fetch())
{
?>

<div class="Comment">

    <div class="com_author">
        <h2><?= htmlspecialchars($comment['author'])?><em> le <?= $comment['comment_date'] ?></em></h2>
    </div>
    <div class="com_content">
        <p>
            <?= htmlspecialchars($comment['content'])?>
        </p>
    </div>
</div>

<?php
}?>

<div class="add">
    <h2>Commentaires</h2>
    <div class="form">
        <form action="index.php?action=addComment&amp;id=<?=$post['id'] ?>" method="post">
            <div class="author">
                <label for="author">Auteur</label><br/>
                <input type="text" id="author" name="author"
            </div>
            <div class="content">
                <label for=""content>Message</label><br/>
                <textarea id="content" name="content"></textarea>
            </div>
            <div class="mbutton">
                <input type="submit"/>
            </div>
        </form>
    </div>

</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php');










