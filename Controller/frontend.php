<?php

require_once ('Model/PostManager.php');
require_once ('Model/CommentManager.php');

function listMyPosts()
{
    $postManager = new PostManager();
    $posts       = $postManager->getPosts();

    require('View/Frontend/myPostsView.php');
}

function showPost()
{
    $postManager    = new PostManager();
    $commentManager = new CommentManager();

    $post           = $postManager->getPost($_GET['id']);
    $comments       = $commentManager->getComments($_GET['id']);

    require('View/Frontend/myPostView.php');
}

function addComment($id, $author, $content)
{
    $commentManager = new CommentManager();

    $bool = $commentManager->postComment($id, $author, $content);

    if($bool === false)
    {
        die('impossible d ajouter le commentaire');
    }
    else
    {
        header('location:index.php?action=showPost&id=' . $id);
    }
}