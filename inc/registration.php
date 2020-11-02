<?php
$nick = $_POST['nick'];
$email = $_POST['email'];
$sex = $_POST['sex'];
$password = $_POST['password'];

if(isset($_POST['ok'])){
if(!empty($nick) && !empty($email) && !empty($password)){
    $sql = 'INSERT INTO avia_users(`nick`, `email`, `sex`, `password`) VALUES (:nick, :email, :sex, :password)';
    $param = [
        'nick' => $nick,
        'email' => $email,
        'sex' => $sex,
        'password' => $password
    ];
    $stat = $dbconn->prepare($sql);
    $stat->execute($param);
    $_SESSION['nick'] = $nick;
    header('Location: ?airport');
}
}

?>
<html><head>
<title>Регистрация</title>
</head>
<body>
<h3>Регистрация</h3>
<form  method = "POST">

    <label>Ник: </label></br>
    <input type="text" name="nick" ></br>
    <label>Email: </label>	</br>
    <input type="text" name="email" >	</br>
    <label>Пол: </label>	</br>
    <input type="radio" name="sex" value="0" >
    <label>Мужской</label>
    <input type="radio" name="sex" value="1" >
	<label>Женский</label></br>
    <label>Пароль: </label></br>
    <input type="text" name="password"></br>
    <label>Подтвердите пароль: </label></br>
    <input type="text" name="password2" ></br>
	
	<input type="submit"  name="ok" value="Отправить">
</form>
</div>


</body></html>