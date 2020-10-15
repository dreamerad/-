<?php

$mysqli = new mysqli('localhost','root','','proba') or die('не работает');
$mysqli->query("SET NAMES 'utf8'");
$mysqli->query("INSERT INTO `user`(`login`,`pass`,`text`) VALUES('UREL','324324','lorem543')");
$mysqli->query("INSERT INTO `user`(`login`,`pass`,`text`) VALUES('ewr','324ee324','loreerm543')");
$date = $mysqli->query("SELECT * FROM `user`");
rest($date);
$log = $_POST['login'];
$pass = $_POST['pass'];
$text = $_POST['text'];

if(isset($_POST['ok'])){
    // if(isset($_POST['login'])){
    //     echo $_POST['login'] ;
    // } 
    // else{
    //     echo '';
    // }
    $mysqli->query("INSERT INTO `user`(`login`,`pass`,`text`) VALUES('$log','$pass','$text')");
}
$mysqli->close();
function rest ($dates)
{
    while(($row = $dates->fetch_assoc()) != false)
    {
       print_r($row['login'] . "<br>")  ;
    }
      
    echo "функция работает"   ;         
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" >
    <input type="text" name="login"><br><br>
    <input type="number" name="pass"><br><br>
    <input type="text" name="text"><br><br>
    <input type="submit" name="ok" value='h' >
    </form>
</body>
</html>