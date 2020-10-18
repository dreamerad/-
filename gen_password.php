<?php
function gen($length = 6){
$password = '';
$arr = array(
    'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 
    'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 
    'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 
    'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 
    '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'
);

for ($i = 0; $i < $length; $i++) {
    $index = rand(0, count($arr));
    $password.= $arr[$index];
}
return $password;
}

if(isset($_POST['ok']))
{
    $gen = gen($_POST['rand']);
    echo $gen;
   
}

?>

<form method = "POST">
<label>Введите длину пароля</label>
<input type = "number" name = "rand">
<input type="submit" name = "ok" value="Генерировать">

</form>