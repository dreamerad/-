<?php
require 'connect.php';
$login = htmlspecialchars(trim($_POST['login']));
$password = htmlspecialchars($password);

if(isset($_POST['ok'])){
    if(!empty($login) && !empty($password)){
        echo "Вы не ввели логин или пароль";
    }else{
        $sql = mysqli_query($con,"SELECT * FROM `accounts` WHERE `login`='$login' ");
    $data = mysqli_fetch_array($sql);

    $password = password_verify($_POST['password'], $data['password']);
        if($password == $data['password']){
            $_SESSION['logged_user'] = $login;
            //$_SESSION['id'] = $data['id'];
            header('Location: user.php');

        }else{
            echo "Не правильный логин или пароль";
            
        }
    }
    }


?>



<html>
<head>Регистрация</head>
<meta charset="utf-8">

<body>
    <form  method="POST">
<label>Логин: </label>
<input type="text" name = "login"></br>
<label>Пароль: </label>
<input type="password" name="password"></br>
<input type="submit" name = "ok" value="Вход">

</form>

</body>
</html>


