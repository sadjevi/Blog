<?php $title = 'Home' ?>
<?php ob_start() ?>




<div class="row medium-9 large-8 columns">
    <div class="presentation">
        <h2>#@KiNdOfLiFe$tYL€</h2>
        <p>
            un petit recueil d'hotels òu j'ai séjourné mais aussi de restaurants òu j'ai eu l'occasion de manger
            et pour finir, une sélection de vins et de champagnes que j'ai appréciés...
        </p>
    </div>
</div>


 
<div class="blog">
    <div class="row medium-10 large-9 columns">
        <div class="blog-post">
            <?php while ($myPosts = $posts->fetch()):?>
                <p> + + + + </p>
                <h3><?php echo $myPosts['title'] . '<br><small> le ' . $myPosts['posted_date']; ?></small></h3>
                <img class="thumbnail" src="<?php echo $myPosts['img_link'];?>">
                <?= substr($myPosts['content'], 0, 300); ?> ...<br><em><a href="index.php?action=showPost&amp;id=<?=$myPosts['id'];?>
                
                ">Lire la suite</a></em></p>
                <div class="empty">
                </div>
            <?php endwhile ;?>
         </div>
    </div>
</div>





<?php $content =  ob_get_clean(); ?>
<?php require('template.php'); ?>