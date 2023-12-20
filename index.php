<?php
session_start();
include 'db.php'; 
        if (!empty($_POST['password']) and !empty($_POST['login'])) {
            $login = $_POST['login'];
            $password = md5($_POST['password']);
            $result = $link->query("SELECT * FROM users WHERE login='$login' AND password='$password'");
    		$user = mysqli_fetch_assoc($result);
    		if (!empty($user)) {
                $_SESSION['login'] = $login;
                header('Location:index2.php');
    		} 
	    }

?>
<html>
    <body>
    <form method = "post">
      <input name = "login" type="text"  placeholder="Логин"><br><br>
      <input name = "password" type="password" placeholder="Пароль"><br><br>
      <button type="submit">Войти</button>
    </form>
    </body>
</html>
