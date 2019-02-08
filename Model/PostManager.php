<?php

require_once ('Model/Connect.php');


class PostManager extends Connect
{
    //retrievin all posts
    public function getPosts()
    {

        $db = $this->dbConnect();
        $posts = $db->query('SELECT * FROM posts ORDER BY posted_date DESC ');

        return $posts;
    }

    //retrievin a specific post and comments
    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, img_link, posted_date FROM posts WHERE id = ? ');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }

    public function newPost($title, $content, $link)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO posts(title, content, img_link, posted_date) VALUES (?, ?, ?, NOW())');
        $bool = $req->execute(array($title, $content, $link));

        return $bool;
    }
}
