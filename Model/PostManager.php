<?php

require_once ('./Model/Manager.php');
require_once ('./Model/PostModel.php');

class PostManager extends Manager 
{
    
    public function __construct(){
        parent::__construct();
    }

    public function getPosts()
    {
       $req = $this -> db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 5');
       $req -> execute();
       $posts=array();
       while ($dbPost = $req-> fetch()){
        $post=new PostModel($dbPost);
        $posts[] = $post;
       }
        return $posts;
    }

    public function getPost($postId)
    {
        $req = $this -> db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date FROM posts WHERE id = ?');
        $req->execute(array($postId));
        // $dbPost = $req->fetch()
        // $post = new PostModel($dbPost);
         while ($dbPost = $req-> fetch()){
            $post=new PostModel($dbPost);
        }

        return $post;
    }

    public function getComments($postId)
    {
        $comments = $this -> db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE post_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($postId));

        return $comments;
    }

    public function postComment($postId,$author,$comment)
    {
        $newComment = $this -> db -> prepare('INSERT INTO commentaires (post_id, author, comment, comment_date) VALUES (:post_id, :author, :comment, NOW()');
        $affectedLines = $newComment -> execute(array($postId, $author, $comment));
        return $affectedLines;
    }

    
}