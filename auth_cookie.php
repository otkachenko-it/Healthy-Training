<?php
if ($_SESSION['auth'] != 'yes_auth' && $_COOKIE["rememberme"])
{
    $str = $_COOKIE["rememberme"];

    // ��� ����� ������
    $all_len = strlen($str);
    // ����� ������
    $login_len = strpos($str,'+');
    // �������� ������ �� ����� � �������� �����
    $login = clear_string(substr($str,0,$login_len));

    // �������� ������
    $pass = clear_string(substr($str,$login_len+1,$all_len));


    $result = mysqli_query($db,"SELECT * FROM users WHERE login = '$login'  AND password = '$password'");
    if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_array($result);
        session_start();
        $_SESSION['auth'] = 'yes_auth';
        $_SESSION['auth_pass'] = $row["password"];
        $_SESSION['auth_login'] = $row["login"];
    }
  }
?>
