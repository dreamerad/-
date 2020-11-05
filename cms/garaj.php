<?
require 'config.php';
include_once 'head.php';


if(!$us->id)
{
echo '<meta http-equiv="refresh" content="0;URL=/">';

}


echo '<div class="top-head"><span class="ti icon"><i class="material-icons">&#xE32A;</i></span>  Гараж <span class="tii icon"><i class="material-icons">&#xE32A;</i></span></div>
';

 $car = R::findAll( 'garaj' , 'WHERE uid = ?', array($u->id) );

 if($car){
foreach($car as $cr){

echo ''.$cr->name.' <br>';

}

}else{

	echo 'Гараж пуст';
}




echo '<a class="superlink" href="/game.php">На главную</a>';
include_once 'foot.php';

?>