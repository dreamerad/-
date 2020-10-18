<?php
require 'connect.php';
if(!empty($_SESSION['user_id'])){
    header('Location: registration.php');
}
$errors = [];

if(!empty($_POST)){
    if(empty($_POST['user_name']))
    {
        $errors[] = 'Заполните поле Логин';
    }
    if(empty($_POST['password']))
    {
        $errors[] = 'Заполните поле Пароль';
    }
    if(empty($errors)){
        $stat = $dbconn->prepare('SELECT id FROM users WHERE (user_name = :user_name OR email = :user_name) AND password = :password'); 
        $stat->execute([
            'user_name' => $_POST['user_name'],
            'password' => password_verify($_POST['password']);
        ]);
        $id = $stat -> fetchColumn();
        if(!empty($id)){
            $_SESSION['user_id'] = $id;
            die("Вы успешно авторизировались");
        } else {
            $errors[] = 'Вы не правильно ввели логин или пароль';
        }
    }
}
?>

<html><head>
<title>Гостевая книга</title>
<link rel="stylesheet" href="indx.css">
</head>
<body>
<div class="handle">
<h3>Авторизация</h3>
<form id="fromcha" method = "POST">
    <?php
foreach ($errors as $error) :?>
<p><?php echo $error; ?></p>
<?php endforeach; ?>
    <label> Логин: </label></br>
    <input type="text" name="user_name" ></br>
    <label> Пароль: </label>	</br>
    <input type="text" name="password" >	</br>

	
	<input type="submit"  class="inputFrom" name="ok" value="Отправить">
</form>
</div>


</body></html>