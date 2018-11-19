<?php

require_once ('./Model/Model.php'); 

class CommentModel extends Model {

	private $id;
	private $post_id;
	private $author;
    private $comment; 
    private $comment_date;

	public function __construct($donnees){
		$this-> hydrate($donnees);
	}

	public function getId(){
		return $this ->id;
	}

	public function getPost_id(){
		return $this ->post_id;
	}

	public function getAuthor(){
		return $this ->author;
	}
	public function getComment(){
		return $this ->comment;
    }
	public function getComment_date(){
		return $this ->comment_date;
	}

	public function setId($id){
		$this->id=$id;
	}
	public function setPost_id($postId){
		$this->post_id=$postId;
	}
	public function setAuthor($author){
		$this->author=$author;
	}
	public function setComment($comment){
		$this->comment=$comment;
    }
	public function setComment_date($commentDate){
		$this->comment_date=$commentDate;
	}
}