
<head>
	<meta charset="utf-8">
<title>Блог здорового тренинга</title>
<link href="/css/style.css" rel="stylesheet" type="text/css">
</head> 
<header>
		<div id="logo">
			<a href="/" title="Перейти на главную"><span>H</span>ealthy <span>T</span>raining</a>
		</div>

		<div id="menuHead">
			<a href="/about.php"><div style="margin-right: 5%">О нас</div></a>

			<a href="/feedback.php"><div>Обратная связь</div></a>
		</div>
 <?php


            if( $_SESSION['auth'] == 'yes_auth')
            {
                echo '<p id="regAuth" align="right"> Здравствуйте, '. $_SESSION['auth_name'].'!</p>';
            	echo "yes";

           
            // <img src="images/user.png"> 

            }
            
            
            else
            {
            	//echo "nnno";
            	echo 
            	'<div id="regAuth"> 
					<a href="/reg.php">Регистрация |</a> 
					<a href="/auth.php">Авторизация</a>
				</div>';
		         

            } 
?>
		

	</header>