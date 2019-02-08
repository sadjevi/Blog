
<?php

require('Controller/frontend.php');
require('Controller/backend.php');


$frontController = new FrontController();
$backController  = new BackController();


isset($_GET['action']) ? $action = $_GET['action'] : $action = 'listMyPosts';
if(isset($_GET['id']))
{
    $id = $_GET['id'];
}


switch($action)

{

                                                    //   FRONTEND


    case'listMyPosts';
        $frontController->listMyPosts();
    break;


    case 'showPost';
        if(isset($id) && $id > 0)
        {
            $frontController->showPost();
        }
    break;


    case'addComment';
        if(isset($id) && $id > 0)
        {
            if(!empty($_POST['author']) && !empty($_POST['content']))
            {
                $frontController->addComment($id, $_POST['author'], $_POST['content']);
            }
            else
            {
                echo'erreur lors de la saisie des informations';
            }
        }
        else
        {
            echo 'erreur: aucun identifiant récupéré';
        }
    break;



                                                       //   BACKEND

    case'addPost';
        if(!empty($_POST['title'] && !empty($_POST['content'] && $_POST['img_link'])))
        {
            $backController->addPost($_POST['title'], $_POST['content'], $_POST['img_link']);
        }
        else
        {
            echo 'erreur lors de votre saisie';
        }
    break;


    case'logIn';
        $backController->logIn();
    break;


    case'logInto';
        $backController->logInto();
    break;


    case'adminPosts';
        $backController->adminPosts();
    break;


    default:
        echo"Erreur 404 - Oups, cette page n'existe pas, désolé, Bye Bye !";

}





