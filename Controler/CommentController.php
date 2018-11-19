<?php  

require_once('./Model/PostManager.php');
require_once('./Model/CommentManager.php');

class CommentController
{
    private $postManager;
    private $commentManager;
	
	public function __construct()
	{
		$this ->postManager = new PostManager();
		$this ->commentManager = new CommentManager();
	}

	public function editComment($commentId)
	{
		$comment = $this -> commentManager ->getComment($commentId);

		require('./View/editComment.php');
    }
    
}