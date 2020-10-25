<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  include './cl.php';

  include './functions/functions.php';
  connectDB();

  $login = ($_POST["login"]);
  $password = ($_POST["password"]);

  if ($_POST["rememberme"] == "yes") { setcookie('rememberme',$login.'+'.$password,time()+3600*24*31, "/"); }

  $query = mysqli_query($mysqli, "SELECT * FROM users WHERE login = '$login' AND password = '$password'");

  $result = mysqli_fetch_assoc($query);

  if(!empty($result['ip']))
  {
    $_SESSION['auth'] = 'yes_auth';
    echo 'yes_auth';
    $_SESSION['auth_name'] = $result["login"];
    ?>
    <br><a href="./">Вернуться на главную страницу</a>"
    <?php
  } else { echo 'no_auth'; }
}

?>
