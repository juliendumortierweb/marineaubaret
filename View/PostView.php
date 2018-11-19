<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mon blog</title>
	<link rel="stylesheet" type="text/css" href="./styles.css">
</head>
<body>

	<h1>Mon super blog!</h1>
	<a href="../index.php">Retour à la page d'accueil</a>

    <h3><strong><?=htmlspecialchars($post-> getTitle($postId))?></strong></h3>
    <p>le <?=htmlspecialchars($post-> getCreation_Date($postId)) ?></p>
    
    
    <div>
        
        <p><?= $post -> getContent($postId) ?><br/></p>


        <p>
            <?php foreach($comments as $comment) {?>
                <p>
                    <i>Commentaire : <?= $comment->getComment(); ?></i>
                    <a href=<?= "index.php?action=editComment&id=".$comment->getId() ?>>(modifier)</a>
                </p>
            <?php } ?>
        </p>



    </div>
		
</body>
</html>