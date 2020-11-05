<?php
session_start();
define('HOST', 'localhost');
define('USER', 'root');
define('DB_NAME', 'aviapark');
define('PASSWORD', 'root');
define('CHARSET', 'utf-8');
$dsn = "mysql:host =".HOST.";dbname=".DB_NAME.";charset =" .CHARSET;
try{
    $dbconn = new PDO($dsn, USER, PASSWORD);
} catch(PDOException $e){
    echo 'Подключение не удалось:' .$e->getMessage();
}
$sql = "SELECT * FROM avia_users WHERE `nick` = '$_SESSION[nick]'";
$query = $dbconn->query($sql);
$av = $query->fetch();


$act = isset ($_GET['act']) ? trim($_GET['act']) : '';



//////Фильтруем цыфры

function num($m){
	$m = intval($m);
	$m = abs($m);
	return $m;
} /* Фильтрует цифры */
//////

function tl($tl){
	$d=3600*24;
	$day=floor($tl/$d);
	$tl=$tl-($d*$day);

	$hour=floor($tl/3600);
	$tl=$tl-(3600*$hour);

	$minute=floor($tl/60);
	$tl=$tl-(60*$minute);

	$second=floor($tl);

	$dayt="".($day>0?"$day д. ":null)."";
	$hourt="".($hour>0?"$hour ч. ":null)."";
	$minutet="".($minute>0?"$minute м. ":null)."";
	$secondt="".($second>0?"$second с. ":null)."";

	if($day>0){
		$minutet=NULL;
		$secondt=NULL;
	}
	if($hour>0 && $day==0){
		$secondt=NULL;
		$dayt=NULL;
	}

	return "$dayt$hourt$minutet$secondt";
}










?>