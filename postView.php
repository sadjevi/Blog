<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>post</title>
        <link href="style.css" rel="stylesheet"/>
    </head>


    <body>

        <?php
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=personal_blog;charset=utf8',
                'root',
                'root',
                 array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        catch (Exception $e)
        {
            die('Erreur' . $e->getMessage());
        }

        $req = $bdd->prepare('SELECT id, title, content, posted_date FROM posts WHERE id = ?');
        $req->execute(array($_GET['post']));
        $myPost = $req->fetch();?>

        <h3><?php echo $myPost["title"] . " le " . $myPost["posted_date"]; ?></h3>
        <p><?php echo $myPost['content']; ?></p>





    </body>























</html>