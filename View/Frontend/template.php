<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <link rel="stylesheet" href="Public/css/style.css">
</head>

<body>

<div class="top-bar">
    <div class="top-bar-left">
        <ul class="menu">
            <li class="menu-text">aKindOfBlog</li>
            <li><a href="#">hotels</a></li>
            <li><a href="#">Restaurant</a></li>
            <li><a href="#">Oenologie</a></li>
        </ul>
    </div>
</div>

<div class="primary"style="color:white">
    <div class="row column text-center">
        <h1>hey you! Welcome </h1>

            this blog is created only for ones who really know appreciate good things<br>
            Hotels, restaurants, some champagnes ans wines....<br>
            the others can just simply.....move on (ha ha ha..A private joke, don't worry guys)<br>
            if you have any suggestions, don't hesitate to let me know 
        </p>
    </div>
</div>


<?= $content ?>



<p style="text-align:center"><a href="index.php?action=logIn">administration du site</a></p>
    <footer>
        <?php if(isset($_SESSION['auth'])):?>
            Vous êtes connectés en tant que <?= $_SESSION['login'];?>
            <a href="index.php?action=logOut">se déconnecter</a>
        <?php endif ?>
    </footer>

</body>
    
<html>

