<?php
require 'config.php';
include_once 'head.php';

$nick = $_POST['nick'];
$pass = $_POST['password'];
if(isset($_POST['on_login'])){
if($nick == "" && $pass == ""){
    echo 'Введите ник или пароль';
}

$sth = $dbconn->prepare("SELECT * FROM avia_users WHERE `nick` = :nick");
$sth->execute([':nick' => $nick]);
$av = $sth->fetch();
if($av['password'] == $pass){
    $_SESSION['nick'] = $nick;
    echo '<meta http-equiv="refresh" content="0;URL=/game.php">';
}else{
    echo 'Введённые данные неверны';
}
}


//var_dump($array['password']);





echo '<div class="content"><div class="gli">Авиапарк</div>
<div class="gl-obv">
Описание</div>
<div class="razmet">
<form action="/" method="post">
<span class="icon-gl"><i class="material-icons">&#xE7FD;</i></span><br/>
<input class="gl" type="text" name = "nick" placeholder="Ваш логин"/><br/>
<span class="icon-gl"><i class="material-icons">&#xE32A;</i></span><br/>
<input class="gl" type="password" name = "password" placeholder="Ваш пароль"/><br/>
<input class="sub-gl" type="submit" name="on_login" value="Авторизация"/>
<a href="/forgot.php"> Забыли пароль?</a>
</div></div>
<div class="line"></div>
<div class="block">
<a class="link" href="/reg.php"><span class="foot-gl-ic"><i class="material-icons">&#xE899;</i></span> Регистрация</a>
<div class="foot-l">
<div class="onli"><span><i class="material-icons">&#xE7FF;</i></span> Всего игроков: <span class="count">'.$av['nick'].'</span></div>

</div>
</div>';


include_once 'foot.php';





?>