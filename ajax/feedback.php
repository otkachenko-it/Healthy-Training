<?php 
	$name = htmlspecialchars($_POST['name']);
	$emile = htmlspecialchars($_POST['emile']);
	$subject = htmlspecialchars($_POST['subject']);
	$message = htmlspecialchars($_POST['message']);
	if ($name == ''|| $emile == '' || $subject == ''|| $message == '') {
		echo "Заполните все поля";
		exit;
	}
	//Отправка
	$subject = "=?utf-8?B?".base64_encode($subject)."?=";
	$headers = "From: $emile\r\nReply-to: $emile\r\nContent-type: text/html; charset=utf-8\r\n";
	if(mail("tkachenko.work@mail.ru", $subject, $message, $headers))
		echo "Сообщение отправлено!";
	else
		echo "Сообщение не отправлено."; 
?>