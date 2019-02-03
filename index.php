
<?php

// Database connection
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=personal_blog;charset=utf8',
        'root',
        'root',
         array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}

catch (Exception $e)
{
    die('Erreur :' . $e->getMessage());
}

// Posts retrievin
$req = $bdd->query('SELECT * FROM posts');

require ('view.php');

?>



