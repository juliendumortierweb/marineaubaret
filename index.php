<?php
    require_once('./Controler\PostControler.php');
    require_once('./Controler\CommentController.php');

    $postControler = new PostControler(); 
    $commentController = new CommentController(); 

    if (array_key_exists('action', $_GET)) {
        switch ($_GET['action']) {
            case 'post':
                if (array_key_exists('id', $_GET) && isset($_GET['id'])) {
                    $postControler->getPost($_GET['id']);
                }
        		break;
            case 'editComment':
                if (array_key_exists('id', $_GET) && isset($_GET['id'])) {
                    $commentController->editComment($_GET['id']);
                }
                break;
        	default:
        		$postControler -> getPosts();
        		break;
        }
    }   
    else {
        	$postControler ->getPosts();
        }
    