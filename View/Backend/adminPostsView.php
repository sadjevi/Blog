<?php session_start(); ?>

<?php $title = 'Admin' ?>

<?php ob_start() ?>


    <div class="add">
        <h2>Nouveau post</h2>

        <form action="index.php?action=addPost" method="post">
            <div class="row">
                <label for="title">Titre *</label>
                    <input type="text" placeholder="Titre" name="title">
                </label>
            </div>
            <div class="row">
                <label for="content">Contenu *</label><br/>
                <textarea placeholder="contenu du billet" rows="8" name="content"></textarea>
            </div>
            <div class="row">
                <label for="img_link">Image *</label><br/>
                <input type="url" placeholder="Lien" name="img_link">
                </label>
            </div>
            <div class="contact-panel-actions">
                <input type="submit" class="button submit-button" value="Submit">
            </div>
        </form>
    </div>

    <div class="row medium-8 large-7 columns">
        <div class="blog-post">
            <h3>Awesome blog post title <small>3/6/2015</small></h3>
            <img class="thumbnail" src="https://hotelmparis.com/_novaimg/1161951-387961_0_0_1600_1029_1400_900.rc.jpg">
            <p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>
            <div class="callout">
                <ul class="menu simple">
                    <li><a href="#">Author: Mike Mikers</a></li>
                    <li><a href="#">Comments: 3</a></li>
                </ul>
            </div>
        </div>
        <div class="blog-post">
            <h3>Awesome blog post title <small>3/6/2015</small></h3>
            <img class="thumbnail" src="https://www.villa-pantheon.com/_files/_media/34/LOBBY/Villa-Pantheon_Salon_M19A1769.jpg">
            <p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>
            <div class="callout">
                <ul class="menu simple">
                    <li><a href="#">Author: Mike Mikers</a></li>
                    <li><a href="#">Comments: 3</a></li>
                </ul>
            </div>
        </div>
    </div>

<h1>A kind of lifestyle</h1>

<p>
    un petit recueil d'hotels òu j'ai séjourné mais aussi de restaurant òu j'ai eu l'occasion de manger
    et pour finir, une sélection de vins et de champagnes que j'ai appréciés...
</p>

<h2>mes posts</h2>



    <div class="row medium-8 large-7 columns">
        <?php while ($myPosts = $posts->fetch()):?>
            <div class="blog-post">
                <h3><?php echo $myPosts['title'] . ' le ' . $myPosts['posted_date']; ?></h3>
                <img class="thumbnail" src="<?php echo $myPosts['img_link'];?>">
                <p><?php echo $myPosts['content']; ?><em><a href="index.php?action=showPost&amp;id=<?=$myPosts['id'];?>">voir le billet </a></em></p>
            </div>
        <?php endwhile ;?>
    </div>


    <div class="row medium-8 large-7 columns">
        <div class="blog-post">
            <h3><?php echo $myPosts['title'] . ' le ' . $myPosts['posted_date']; ?></h3>
            <img src="<?php echo $myPosts['img_link'];?>">
            <p>
                <?php echo $myPosts['content']; ?>
                <em><a href="index.php?action=showPost&amp;id=<?=$myPosts['id'];?>">voir le billet </a></em>
            </p>
        </div>
    </div>




<?php $content =  ob_get_clean(); ?>
<?php require('View/Frontend/template.php'); ?>
