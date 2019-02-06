
<?php

require('Controller/frontend.php');
require('Controller/backend.php');

if (isset($_GET['action']))
{
    if($_GET['action'] == 'listMyPosts')
    {
        listMyPosts();
    }

    elseif($_GET['action'] == 'showPost')
    {
        if(isset($_GET['id']) && $_GET['id'] > 0)
        {
            showPost();
        }
        else
        {
            echo'aucun identifiant';
        }
    }

    elseif ($_GET['action'] == 'addComment')
    {
        if(isset($_GET['id']) && $_GET['id'] > 0 )
        {
            if(!empty($_POST['author'] && !empty($_POST['content'])))
            {
                addComment($_GET['id'], $_POST['author'], $_POST['content']);
            }
            else
            {
                echo'erreur lors de la saisie des informations';
            }
        }
        else
        {
            echo'aucun identifiant';
        }
    }
    elseif ($_GET['action'] == 'addPost')
    {
        if(!empty($_POST['title']) && !empty($_POST['content'] && !empty($_POST['img_link'])))
        {
            addPost($_POST['title'], $_POST['content'], $_POST['img_link']);
        }
        else
        {
            echo 'erreur lors de la saisie';
        }
    }
    elseif ($_GET['action'] == 'logIn')
    {
        logIn();
    }

    elseif ($_GET['action'] == 'logInto')
    {
        logInto();
    }

    elseif ($_GET['action'] == 'adminPosts')
    {
        
        adminPosts();
        
    }

    
}
else
{
    listMyPosts();
}





