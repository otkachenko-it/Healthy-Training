<?php
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }

    if (isset($_POST['email'])) { $email = $_POST['email']; if ($email == '') { unset($email);} }

    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }

    if (empty($login) or empty($password) or empty($email) ) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
      exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }

    $login = stripslashes($login);
    $login = htmlspecialchars($login);
    $password = stripslashes($password);
    $password = htmlspecialchars($password);
    $email = stripslashes($email);
    $email = htmlspecialchars($email);

    $login = trim($login);
    $password = trim($password);
    $email = trim($email);

    include './functions/functions.php';
    connectDB();

    $result = mysqli_query($mysqli, "SELECT * FROM users WHERE email = '$email' or login = '$login'");
    $myrow = mysqli_fetch_assoc($result);

    if (!empty($myrow['ip'])) { exit ("Извините, введённый вами email или login уже зарегистрирован. Введите другой email или login."); }

    else {
      $result2 = mysqli_query($mysqli,"INSERT INTO users (login,password,email) VALUES('$login', '$password', '$email')");
      // Проверяем, есть ли ошибки
      if ($result2=='TRUE')
      {
        echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
      } else {
        echo "Ошибка! Вы не зарегистрированы.";
      }
    }

 // если такого нет, то сохраняем данные

?>
