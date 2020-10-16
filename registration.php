<?php
session_start();
?>
<?php
require 'config.php';
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
            if($_POST['sex'] == 1){
            $pol = 1; // Мужской пол
            }else{ 
            $sex = 2;} // Женский пол
            if($password == $password2)
            {
                $sql = "SELECT login, email FROM `accounts` WHERE `login` = '$login' OR `email` = '$email'"; // Сравнение логина и пароль
                $query = mysqli_query($con, $sql);
                $array = mysqli_fetch_array($query);
                if($array == 0){
                    $password = password_hash($password,PASSWORD_DEFAULT); // Хеширование
                    $sqlinsert = "INSERT INTO `accounts`(`login`, `password`, `email`, `sex`) VALUES ('$login', '$password', '$email', '$sex')"; 
                    $result2 = mysqli_query($con, $sqlinsert);
                    $_SESSION['login'] = $login;
                    header('Location: /-/user.php');

                    echo "Вы успешно зарегистрировались в нашей системе";
                }else{
                        
                    
                    echo "Пользователь с таким логином уже зарегистрирован";
                }
            }else{
                echo "Введённые пароли не совпадают";}
            
        }else{
            echo "Введённая почта введена не верна";
        }
    }else{
    echo "Длина почты должна быть меньше 30 символов";
    }
}else{
    echo "Длина логина должна быть меньше 15 символов";
}

}else{
    echo "Заполните все поля";
}}
?>
<html>
<head>Регистрация</head>
<meta charset="utf-8">

<body>
    <form method="POST">
<label>Логин: </label>
<input type="text" name = "login"></br>
<label>Пароль: </label>
<input type="password" name="password"></br>
<label>Подтверждение пароля: </label>
<input type="password" name="password2"></br>
<label>Email: </label>
<input type="email" name="email"></br>
<label>Пол: </label>
<select name = "sex">
<option type="radio" name = "sex" value="1">Мужской</option>
<option type="radio" name = "sex" value="2">Женский</option></br>
</select>
<input type="submit" name = "ok" value="Регистрация">

</form>

</body>
</html>