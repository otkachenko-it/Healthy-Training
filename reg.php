


    <!DOCTYPE html>
<html>
<head>
	<?php
	$title = "Регистрация";
	require_once "blocks/head.php"
	?> 
<link rel="stylesheet" type="text/css" href="css/style.css">

<script type="text/javascript">
		function valid(form) {
			var fail = false;
			var login = form.login.value;
			var email = form.email.value;
			var password = form.password.value;
			var RePassword = form.RePassword.value;


				if(login == "" || login == " ")
				fail = "Вы не ввели имя";

			else if(email == "")
				fail = "Вы не ввели email";

			else if(password == "")
				fail = "Вы не ввели пароль";

			else if(password != RePassword)
				fail = "Пароли не совпадают";


			if(fail)
				alert(fail);

				
				
		}

	</script>
</head>

<body>
	    <form action="db_reg.php" method="post">
    <div id="reg-form">
     <label for="login">Логин:</label>
		<input type="text" name="login" placeholder="Логин" id="login" /><br /><br />
    

   
   <label for="email">Email:</label>
		<input type="text" name="email" placeholder="email" id="email" /><br /><br />
    



   <label for="password">Ваш пароль:</label>
		<input type="text" name="password" placeholder="Пароль" id="password" /><br /><br />


    

   
   <label for="RePassword">Пароль:</label>
		<input type="password" name="RePassword" placeholder="Введите пароль повторно" id="RePassword" /><br /><br />

    </div>




<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 
<p>
    <input type="submit" name="submit" value="Зарегистрироваться">
<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php***** --> 
</p></form>

</body>
</html>