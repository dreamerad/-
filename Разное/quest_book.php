<?php
require 'connect.php';
session_start();

if(empty($_SESSION['user_id'])){
header('Location: login.php');
}
if(!empty([$_POST['coment']])){
$stat = $dbconn->prepare("INSERT INTO comments(`user_id`, `comment`) VALUES (:user_id, :comment)");
$stat->execute(array(
    'user_id' => $_SESSION['user_id'],
    'comment' => $_POST['comment']));
}
$stat = $dbconn->prepare('SELECT * FROM comments ORDER BY id DESC');
$stat->execute();
$comments = $stat->fetchAll();
?>

<html><head>
<title>Гостевая книга</title>
<link rel="stylesheet" href="indx.css">
</head>
<body>
<div class="handle">
<h3>Гостевая книга</h3>
<form id="fromcha" method = "POST">
<textarea name = "comment"></textarea>

	
	<input type="submit"  class="inputFrom" name="ok" value="Отправить">
</form>

<?php foreach($comments as $comment): ?>
<p> <?php
if($comment['user_id'] == $_SESSION['user_id']) 
echo $comment['first_name'];?>

<?php echo $comment['comment'] ?> <span class="comment-date">(<?php
echo $comment['created_at'];?>)</span></p>
<?php endforeach; ?>
</div>


</body></html>