<?php
setcookie("log");
$_COOKIE['log'] = $_POST['log'];
// require_once 'mysql/connect.php';
// require_once 'system/functions.php';

// if ($_SERVER['REQUEST_URI'] == '/') $page = 'login';
// else {

//     $page = substr($_SERVER['REQUEST_URI'], 1);
//     if(!preg_match('/^[A-z0-9]{3,15}$/', $page))
//     exit('error url');
// }
// session_start();

// if(file_exists('all/' .$page. '.php')) include 'all/' .$page. '.php';
// else if($_SESSION['ulogin'] == 1 and file_exists('auth/' .$page. '.php')) include 'auth/' .$page. '.php';
// else if($_SESSION['ulogin'] != 1 and file_exists('quest/' .$page. '.php')) include 'quest/' .$page. '.php';
// else exit('Страница 404');
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="log" value="">
        <input type="text" name="pass" value="">
        <input type="submit" name="ok">
    </form>
</body>
</html>
<?php
if(isset($_POST['ok'])){
    if(!empty($_POST['log'])){
        $login = $_POST['log'];
            echo "Ваш логин :". strip_tags(htmlspecialchars($_POST['log']) )   . "</br>";
    }
    else{
        echo "<p style='color:red'>поле логин пустое</p> </br>";
    }
    if(!empty($_POST['pass'])){
        $password =$_POST['pass'];
        echo "Ваш логин :". strip_tags(htmlspecialchars(trim($_POST['pass'])) )   . "</br>";
}
else{
    echo "<p style='color:red'>Вы не указали пароль</p> </br>";
}
    // mail("fahokife_383@mail.ru", "tem"," ваш логин: $login, ваш пароль: $password");
    echo base64_encode($password);
    echo http_build_query("ryt,gfd,tdgdfg") . "iii";
}

?>