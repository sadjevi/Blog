<?php


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
        header('location:index.php?action=listMyPosts');
    }
}