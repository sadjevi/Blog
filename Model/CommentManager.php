<?php

require_once ('Model/Connect.php');


class CommentManager extends Connect
{

    public function getComments($postId)
    {
        $db =  $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, content, comment_date FROM comments WHERE post_id =?');
        $comments->execute(array($postId));
        return $comments;
    }

    function postComment($id,$author,$content)
    {
        $db = $this->dbConnect();
        $new = $db->prepare('INSERT INTO comments(post_id, author, content, comment_date) VALUES (?, ?, ?, NOW())');
        $bool = $new->execute(array($id, $author, $content));

        return $bool;
    }

}