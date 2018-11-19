<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mon blog</title>
	<link rel="stylesheet" type="text/css" href="./styles.css">
</head>
<body>

	<h1>Mon super blog!</h1>

	<h2>Derniers Posts</h2>
		<?php foreach($posts as $post) {?>
			<div>
				<h3><strong><?=htmlspecialchars($post -> getTitle())?></strong></h3>
				<p><?= $post -> getContent() ?></p>
				<a href=<?= "index.php?action=post&id=". $post->getId() ?> >Lire la suite </a>
			</div>
			<?php } ?>
</body>
</html>