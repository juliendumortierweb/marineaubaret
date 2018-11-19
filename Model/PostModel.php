<?php

require_once ('./Model/Model.php'); 

class PostModel extends Model {

	private $id;
	private $title;
	private $content;
	private $creation_date; 

	public function __construct($donnes){
		$this-> hydrate($donnes);
	}

	public function getId(){
		return $this ->id;
	}

	public function getTitle(){
		return $this ->title;
	}

	public function getContent(){
		return $this ->content;
	}
	public function getCreation_date(){
		return $this ->creation_date;
	}

	public function setId($id){
		$this->id=$id;
	}
	public function setTitle($title){
		$this->title=$title;
	}
	public function setContent($content){
		$this->content=$content;
	}
	public function setCreation_date($creation_date){
		$this->creation_date=$creation_date;
	}
}