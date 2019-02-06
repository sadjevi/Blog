<?php

require_once ('Model/AdminManager.php');
require_once ('Model/PostManager.php');
require_once ('Model/CommentManager.php');

function addPost($title, $content, $link)
{
    $postManager = new PostManager();
    $bool = $postManager->newPost($title, $content, $link);

    if($bool === false)
    {
        die('impossible d enregistrer le nouveau billet');
    }
    else
    {
        
        require_once('View/Frontend/myPostsView.php');
    }
}

function logInto()
{
    $adminManager = new AdminManager;
    $log = $adminManager->logPass();
    $logged = password_verify($_POST['password'], $log['password']);

    if($logged === false)
    {
        die('mauvaises entées');
    }
    else
    {
        if($logged && $_POST['login'] == $log['login'])
        {
            $_SESSION['auth'] = true ;
            $_SESSION['id']       = $log['id'];
            $_SESSION['login'] = $log['login'];
            $_SESSION['password'] = $log['password'];
        }
        else
        {
            die('erreur');
        }
    }
    header('location:index.php?action=adminPosts');
    
}

function logIn()
{
    $adminManager = new AdminManager();
    $log          = $adminManager->logPass();

    require_once('view/Backend/authView.php');
}

function adminPosts()
{
    $postManager = new PostManager();
    $posts       = $postManager->getPosts();

    require_once('View/Backend/adminPostsView.php');
}






















