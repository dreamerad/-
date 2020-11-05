<?php
require 'config.php';
include_once 'head.php';

if($us->id > 0)
{
echo '<meta http-equiv="refresh" content="0;URL=/game.php">';
}

$reg = $_POST;
// Чекаут на выбор пола
if( isset($reg['on_reg'])) 
{
$error = array();

if(trim($reg['nick']) == ''){
$error[] = 'Введите Логин';
}
if(trim($reg['email']) == ''){
$error[] = 'Введите Email';
}

if($reg['password'] == ''){
$error[] = 'Введите пароль';
}
if($reg['password'] != $reg['password2'] ){
$error[] = 'Пароли не совпадают';
}
$sql = 'SELECT * FROM avia_users';
$query = $dbconn->query($sql);
$av = $query->fetch();

if($av['nick'] == $reg['nick'])
{
	$error[] = 'Такой Логин уже используется';
}

if($av['email'] == $reg['email']) 
{
	$error[] = 'Такой номер Email уже используется';
}


if(empty($error)){
$sql = 'INSERT INTO avia_users(`nick`, `email`, `sex`, `password`) VALUES (:nick, :email, :sex, :password)';
$param = [
    'nick' => $reg['nick'],
    'email' => $reg['email'],
    'sex' => $reg['sex'],
    'password' => $reg['password']
];
    $stat = $dbconn->prepare($sql);
    $stat->execute($param);
    $_SESSION['nick'] = $reg['nick'];

echo '<meta http-equiv="refresh" content="0;URL=/game.php">';

echo '<font color="green">Вы успешно прошли регистрацию</font>';

}else{


echo '<span class="time">Ошибка</span>
<div class="obvodka">
<font color="#dca692">'.array_shift($error).'</font>
</div>';

echo '</hr>';
}
}
echo '<div class="content"><div class="gli">Регистрация</div> 

<div class="razmet">
<form action="/reg.php" method="POST">
<span class="icon-gl"><i class="material-icons">&#xE7FD;</i></span><br/>
<input class="gl" type="text" name="nick" value="'.@$reg['nick'].'" placeholder="Логин"/><br/>
<span class="icon-gl"><i class="material-icons">&#xE0BE;</i></span><br/>
<input class="gl" type="text" name="email" value="'.@$reg['email'].'" placeholder="Email"/><br/>
<span class="icon-gl"><i class="material-icons">&#xE32A;</i></span><br/>
<input class="gl" type="password" name="password" placeholder="Пароль"/><br/>
<span class="icon-gl"><i class="material-icons">&#xE32A;</i></span><br/>
<input class="gl" type="password" name="password2" placeholder="Повторите пароль"/><br/>
<span class="icon-gl"><i class="material-icons">&#xE32A;</i></span><br/>
<label class="gl">Пол:</label></br>
<label >Мужской</label>
	<input type="radio" name="sex" value="0" checkout></br>
	<label>Женский</label>
    <input type="radio" name="sex" value="1" ></br>

<input class="sub-gl" type="submit" name="on_reg" value="Регистрация"/>
</form>
</div>
<a class="superlink" href="/"> На главную</a>';

include_once 'foot.php';

?>