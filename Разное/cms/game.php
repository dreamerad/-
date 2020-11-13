<?
session_start();

require 'config.php';
include_once 'head.php';

var_dump($av['nick']);
var_dump($_SESSION['nick']);



// if(!$u->id)
// {
// echo '<meta http-equiv="refresh" content="0;URL=/">';

// }


echo '
<div class="shadow">
<div class="n-p top-left">
<a class="head-li" href="#"><span class="icon"><i class="material-icons">&#xE7FF;</i></span>'.$u->login.'</a>




<a class="head-li" href="#"><span class="icon"><i class="material-icons">&#xE7F4;</i></span> Уведомления +1</a>
<a class="head-li" href="#"><span class="icon"><i class="material-icons">&#xE0E1;</i></span> Почта +1</a>
</div>



<a class="li-li link" href="/perevozki.php"><span class="f-i foot-gl-ic"><i class="material-icons">&#xE558;</i></span> Локация</a>
<a class="li-li link" href="/birza.php"><span class="f-i foot-gl-ic"><i class="material-icons">&#xE558;</i></span> Локация</a>



<a class="li-li link" href="/avtopark.php"><span class="f-i foot-gl-ic"><i class="material-icons">&#xE613;</i></span> Локация</a>
<a class="li-li link" href="/garaj.php"><span class="f-i foot-gl-ic"><i class="material-icons">&#xE7EE;</i></span> Локация</a>


<a class="li-li link" href="#"><span class="f-i foot-gl-ic"><i class="material-icons">&#xE563;</i></span> Магазин</a>

<a class="li-li link" href="#"><span class="f-i foot-gl-ic"><i class="material-icons">&#xE84F;</i></span> Банк</a>
<a class="li-li link" href="#"><span class="f-i foot-gl-ic"><i class="material-icons">&#xE156;</i></span> Склад</a>
<a class="li-li link" href="#"><span class="f-i foot-gl-ic"><i class="material-icons">&#xE851;</i></span> Профиль</a>
<a class="li-li link" href="exit.php"><span class="f-i foot-gl-ic"><i class="material-icons">&#xE879;</i></span> Выход</a>
<div class="superlink"><span class="f-i foot-gl-ic"><i class="material-icons">&#xE853;</i>'.$av['nick'].'</span> <span class="f-i foot-gl-ic">
<span class="f-i foot-gl-ic"><i class="material-icons">&#xE263;</i>'.$av['money'].'</span>  <span class="f-i foot-gl-ic">
</span>
</div>
';

include_once 'foot.php';
?>
