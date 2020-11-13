<?php

$data = $_POST;
$errors = [];

if(isset($_POST['go'])){
	if(empty($data['login']) && empty($data['password']) && empty($data['password2']) && empty($data['email'])){
		$errors[] = 'Заполните поля ввода обозначенные *';
		echo "Заполните все";
	}
	if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
    	$errors[] = 'E-mail указан неверно';
    	echo "E-mail указан неверно";}
    if($data['password'] != $data['password2']){
    	$errors[] = 'Введённые пароли не совпадают';
    	echo "Введённые пароли не совпадают";
    }
    $sql = $dbconn->prepare('SELECT email FROM users WHERE email = :email');
    $sql->execute([
    	':email' => $data['email']
    ]);
    $result = $res->fetch();
	if($data['email'] == $result['email']){
		$errors[] = 'Такой E-mail уже существует';
		echo "Такой E-mail уже существует";
	}
	$sql = $dbconn->prepaer('INSERT users VALUES (:login, :name, :username, :password, :email, :sex)');
	$sql->execute([
		'login' => $data['login'],
		'name' => $data['name'],
		'username' => $data['username'],
		'password' =>  password_hash($data['password'], PASSWORD_DEFAULT),
		'sex' => $data['sex']
	]);

	$code = random_str(7);
	$code = $_SESSION['code'];
	mail($mail, 'Подтвердите регистрацию', '<b>Ваш код подтверждения:' .$code. '</b>')
	echo "Регистрация прошла успешно";

	//header('Location:/home')
}