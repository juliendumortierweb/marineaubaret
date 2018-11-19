<?php

require_once ('./Model/Manager.php');
require_once ('./Model/CommentModel.php');

class CommentManager extends Manager 
{
    
    public function __construct(){
        parent::__construct();
    }

    public function getCommentsByPost($postId)
    {
       $req = $this -> db->prepare('SELECT id, post_id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date FROM comments WHERE post_id = :postId ORDER BY comment_date DESC LIMIT 0, 5');
       $req -> execute(array('postId' => $postId));
       $comments=array();
       while ($dbComment = $req-> fetch()){
        $comment=new CommentModel($dbComment);
        $comments[] = $comment;
       }
        return $comments;
    }

    public function getComment($commentId) {
        $req = $this -> db->prepare('SELECT id, post_id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date FROM comments WHERE id = :commentId');
        $req -> execute(array('commentId' => $commentId));
        $dbComment = $req->fetch();
        $comment = new CommentModel($dbComment);

        return $comment;
    }
    
}