<?php
$string = 'Есть длинный текст и есть форма поиска по этому тексту. При вводе слова в форму
поиска необходимо найти все упоминания этого слова в тексте и выделить (подсветить) цветом, 
жирным или другим настраивающим способом. В случае, если указываются 2 слова, то каждое должно 
искаться индивидуально, если словосочетание указывается в кавычках,то ищется как единое словосочетание.
Помимо грубого поиска так же должно находить слова с разными окончаниями: пиво, пива, пивом.';
$array = explode(" ", $string);
$ser = $_POST['searche'];
// echo "<pre>";
// var_dump($array);
// echo "</pre>";

if(isset($_POST['ok'])){
echo $string .'</br>';
    foreach ($array as $index => $name)
 {
   if  ($ser == $name)
     {
      echo '</br> совпадение - ' .$name. '</br>';
      }
    
}
}
$array = array(1,1,1,2,2,2,3,3);
foreach ($array as $val)
{
  if ( !$pr[$val] )
  {
    $pr[$val] = $val;
    echo $pr[$val]. ' <br /> ';
  }
}

?>

<form method="POST">
<input type="text" name="searche">
<input type="submit" name="ok">


</form>