<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <title>vue</title>
        <link rel="style.css" rel="stylesheet"/>
    </head>

    <body>

    <h1>A kind of lifestyle</h1>

    <p>
        un petit recueil d'hotels òu j'ai séjourné mais aussi de restaurant òu j'ai eu l'occasion de manger
        et pour finir, une sélection de vins et de champagnes que j'ai appréciés...
    </p>

    <h2>mes posts</h2>
    <?php

    while ($myPosts = $req->fetch())
    {
        ?>


        <h3><?php echo $myPosts["title"] . " le " . $myPosts["posted_date"]; ?></h3>
        <p>
            <?php echo $myPosts['content']; ?>
            <em><a href="postView.php?post=<?php echo $myPosts["id"];?>">voir le billet </a></em>
        </p>
        <?php
    }
    $req->closeCursor();
    ?>

    </body>
</html>