<?php

$data = $_POST;
$errors = [];

if(isset($_POST['go'])){
    $sql = $dbconn->prepare('SELECT email FROM users WHERE email = :email');
    $sql->execute([
    	':email' => $data['email']
    ]);
    $result = $sql->fetch();
	if($data['email'] == $result['email']){
		$errors[] = 'Такой E-mail уже существует';
		echo "Такой E-mail уже существует";
	}else{
        echo "ок";
    }
}