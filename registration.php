<?php
session_start();
require 'connect.php';
// Переменные
$login = (trim($_POST['login']));
$email = (trim($_POST['email']));
$password = $_POST['password'];
$password2 = $_POST['password2'];
$sex = $_POST['sex'];
$error = [];

//////////////////////////////

if($_POST['ok']){
if(!empty($login) && !empty($email) && !empty($password) && !empty($password2)){ // Проверки на не пустоту
if(strlen($login) <= 15){ // Длина логина
    if(strlen($email) <= 30){ // Длина email
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            if($password == $password2)
            {
                //WHERE `login` = '$login', `email` = '$email'
                $res=mysqli_query($con,"SELECT `login` FROM `users` WHERE `login`= 'admin' ");
                $data=mysqli_fetch_array($res);
                if(empty($login))
                {
                    die("Такой логин уже существует!");
                }else{
                    die("все ок");
                }
             
                //password_hash($password, PASSWORD_DEFAULT);

            }else{
                $error[] = "Введённые пароли не совпадают";
                echo "нет";}
            
        }else{
            $error[] = "Введённая почта введена не верна";
            echo "нет";

        }
    }else{
    echo "Длина почты должна быть меньше 30 символов";
    $error[] = "Длина e-mail должна быть меньше 30 символов";
    }
}else{
    echo "Длина логина должна быть меньше 15 символов";
    $error[] = "Длина логина должна быть меньше 15 символов";
}

}else{
    $error[]= "Заполните все поля";
    echo "ПУсто";

    //var_dump(var_dump($login));
}}
