<?php
		include './functions/functions.php';
		include './authphp.php';

		?>


    <!DOCTYPE html>
<html>
<head>
	<?php
	$title = "�����������";
	require_once "blocks/head.php"
	?>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>


 <?php
            if( $_SESSION['auth'] == 'yes_auth')
            {

            	echo "yes";


            }
            else
            {
            	//echo "nno";
            	echo
            	'<div id="regAuth">
					<a href="/reg.php">�����������</a>
					<a href="/auth.php">�����������</a>
				</div>';


            }
?>







<!--	<form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST"> -->
	<form action="authphp.php" method="post">
		<label for="login">�����:</label>
		<input type="text" name="login" placeholder="�����" id="login" />

		<br/><br/>

   		<label for="password">������:</label>
		<input type="password" name="password" placeholder="������" id="password" />
		<br/><br/>
		<input type="checkbox" name="rememberme" id="rememberme"/><label for="rememberme">��������� ����</label>


   		 <button type="submit" name="submit">����</button>


	</form>

</body>
</html>
