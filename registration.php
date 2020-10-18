<?php
require 'connect.php';

if(!empty($_SESSION['user_id'])){
    header("Location: /index.php");
}
$errors = [];
if(!empty($_POST)){
    if(empty($_POST['user_name'])){
        $errors[] = 'Заполните поле Логин';
    }
    if(empty($_POST['email'])){
        $errors[] = 'Заполните поле Email';
    }
    if(empty($_POST['last_name'])){
        $errors[] = 'Заполните поле Имя';
    }if(empty($_POST['first_name']))
    {
        $errors[] = 'Заполните поле Фамилия';
    }
    if(empty($_POST['password'])){
        $errors[] = 'Заполните поле Пароль';
    }
    if(empty($_POST['password2']))
    {
        $errors[] = 'Заполните поле Подтвердить пароль';
    }
    if(strlen($_POST['login']) > 50)
    {
        $errors[] = 'Логин должен быть менее 50 символов';
    }
    if(strlen($_POST['last_name']) > 30)    {
        $errors[] = 'Имя должен быть менее 30 символов';
    }
    if(strlen($_POST['first_name']) > 30)    {
        $errors[] = 'Фамилия должен быть менее 30 символов';
    }
    if(strlen($_POST['password']) < 6)    {
        $errors[] = 'Пароль должен быть более 6 символов';
    }
    if($_POST['password'] !== $_POST['password2'])    {
        $errors[] = 'Пароли не совпадают';
    }
    if(empty($errors)){
        $stat = $dbconn->prepare('INSERT INTO users(`user_name`, `email`, `first_name`, `last_name`, `password`) VALUES (:user_name, :email, :first_name, :last_name, :password)');
        $stat->execute([
        'user_name' => $_POST['user_name'],
        'email' => $_POST['email'], 
        'last_name' => $_POST['last_name'],
        'first_name' => $_POST['first_name'],
        'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)]);
        header('Location: /login.php');
    }
}






?>
<html><head>
<title>Гостевая книга</title>
<link rel="stylesheet" href="indx.css">
</head>
<body>
<div class="handle">
<h3>Регистрация</h3>
<form id="fromcha" method = "POST">
    <?php
foreach ($errors as $error) :?>
<p><?php echo $error; ?></p>
<?php endforeach; ?>
    <label> Логин: </label></br>
    <input type="text" name="user_name" ></br>
    <label> Email: </label>	</br>
    <input type="text" name="email" >	</br>
    <label> Имя: </label>	</br>
    <input type="text" name="last_name" ></br>	
    <label> Фамилия: </label>	</br>
    <input type="text" name="first_name" ></br>	
    <label> Пароль: </label>	</br>
    <input type="text" name="password" >	</br>
    <label> Подтвердите пароль: </label>	</br>
    <input type="text" name="password2" ></br>
	
	<input type="submit"  class="inputFrom" name="ok" value="Отправить">
</form>
</div>


</body></html>