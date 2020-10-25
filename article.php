﻿<!DOCTYPE html>

<html>
<head>

	<meta charset="utf-8">

<?php
	require_once "functions/functions.php";
	$news = getNews(1, $_GET["id"]);

	$title = $news["title"];
	require_once "blocks/head.php";
?>

</head>
<body>
	<?php require_once "blocks/header.php" ?>

	<div id="wrapper">
		<div id="leftCol">
		

			<?php
				
					echo '<div id="bigArticle">
						<img src="/img/articleimg/'.$news["id"].'.jpg" alt="Статья '.$news["id"].'" title="Статья '.$news["id"].'">
				<h1>'.$news["title"].'</h1>
				<p>'.$news["full_text"].'</p>
			</div>';

			?>

		</div>
				<?php require_once "blocks/rightCol.php" ?>
		</div>
		<?php require_once "blocks/footer.php" ?>
</body>
</html>
