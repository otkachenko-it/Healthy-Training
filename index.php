
<!DOCTYPE html>

<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<?php
include "./functions/functions.php";

	$title = "Блог здорового тренинга";
	require_once "./blocks/head.php";
	$news = getNews(2, "");


?>

</head>
<body>
	<?php require_once "blocks/header.php" ?>

	<div id="wrapper">
		<div id="leftCol">
			<?php
				for ($i = 0; $i < count($news); $i++) {
					if ($i == 0)
						echo "<div id=\"bigArticle\">";
					else
						echo "<div class=\"article\"> ";
					echo '<img src="/img/articleimg/'.$news[$i]["id"].'.jpg" alt="Статья '.$news[$i]["id"].'" title="Статья '.$news[$i]["id"].'">
				<h1>'.$news[$i]["title"].'</h1>
				<p>'.$news[$i]["intro_text"].'</p>
				<a href="/article.php?id='.$news[$i]["id"].'">
				<div>Далее</div></a>
			</div>';

			if ($i == 0)
				echo "<div class=\"clear\"><br></div>";
				}

			?>



		</div>
				<?php require_once "blocks/rightCol.php" ?>
		</div>
		<?php require_once "blocks/footer.php" ?>
</body>
</html>
