<!DOCTYPE html>
<html>
<head>
	<?php
	$title = "Обратная связь";
	require_once "blocks/head.php" 
	?> 

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
  </script>
  <script>
  	$(document).ready (function () {
  		$("#done").click (function () {
  			$('#messageShow').hide ();
  			var name = $("#name").val ();
  			var emile = $("#emile").val ();
  			var subject = $("#subject").val ();
  			var message = $("#message").val ();
  			var fail = "";
  			if (name.length < 3) fail = "Имя не менее 3 символов";
  			else if (emile.split ('@').length -1 == 0 || emile.split ('.').length -1 == 0)
  				fail = "Введен некорректный Emile";
  			else if (subject.length < 5) fail = "Тема сообщения не менее 5 символов";
  			else if (message.length < 20) fail = "Сообщение не менее 20 символов";
  			if (fail !="") {
  				$('#messageShow').html (fail + "<div class='clear'><br></div>");
  			
  			$('#messageShow').show ();
  			return false;
  		}
  		$.ajax({
  			url:'/ajax/feedback.php',
  			type: 'POST',
  			cache: false,
  			data: {'name': name,'emile': emile, 'subject': subject, 'message': message},
  			dataType: 'html',
  			success: function (data){
  				$('#messageShow').html (data + "<div class='clear'><br></div>");
  				$('#messageShow').show ();
  			}
  		});

  		});
  	});
  </script>
</head>
<body>
	<?php require_once "blocks/header.php" ?>

	<div id="wrapper">
		<div id="leftCol">
			<form name="feedback" action="ajax/feedback.php" method="post">
			<input type="text" placeholder="Имя" id="name" name="name"><br />
			<input type="text" placeholder="Emile" id="emile" name="emile"><br />
			<input type="text" placeholder="Тема" id="subject" name="subject"><br />
			<textarea name="message" id="message" placeholder="Введите сообщение"></textarea><br />

			<div id="messageShow"></div>

			<input type="button" name="done" id="done" value="Отправить">
		</form>

			


		</div>
				<?php require_once "blocks/rightCol.php" ?>
		<?php require_once "blocks/footer.php" ?>

</body>
</html>



