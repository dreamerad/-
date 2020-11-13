
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">RutBooks</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul>
                    <li>F</li>
                    <li>T</li>
                </ul>
            </div>
        </div>
     </div>
    </div>
    <div class="jumbotron">
        <div class="row">
            <div class="col-lg-4 col-md-4"></div>
            <div class="col-lg-8 col-md-8">

           
        
    <div class="container">
        <form method = "POST" role="form" class="form-horizontal " style="margin: 20px 0 0  0;">
            <div class="form-group ">
                
                <div class="col-lg-5 col-sm-6 col-xs-8 col-md-6">
                    <label class="control-label" for="login">Логин</label>
                    <input type="text" class="form-control" placeholder="Введите логин" id="login" name="login">
                </div>
            </div>
            <div class="form-group ">
              
                <div class="col-lg-5 col-sm-6 col-xs-8 col-md-6">
                    <label class="control-label" for="mail">Почта</label>
                    <input type="mail" class="form-control" placeholder="Введите E-mail" id="mail" name="email">
                </div> 
                 
            </div>
            

            <div class="form-group ">
                <div class="col-lg-5 col-sm-6 col-xs-8 col-md-6">
                <label class="control-label">Пароль</label>
                <input type="password" class="form-control" placeholder="Введите пароль" name="password">
            </div></div>
            <div class="form-group ">
                <div class="col-lg-5 col-sm-6 col-xs-8 col-md-6">
                <label class="control-label">Повторите пароль</label>
                <input type="password" class="form-control" placeholder="Введите ёще раз пароль" name="password2">
            </div>
            </div>
            <div class="radio-inline ">
                <div class="col-lg-5 col-sm-6 col-xs-8 col-md-6">
                <label class="control-label text-center">
                        <input type="radio"  value="0" name="sex"> Мужской
                </label>
                 </div>
            </div>
            <div class="radio-inline">
                <div class="col-lg-5 col-sm-6 col-xs-8 col-md-6">
                <label class="control-label text-center">
                        <input type="radio" value="1"  name="sex"> Женский
                </label>
                 </div>
            </div>
            <br> <br>
           
                <button type = "submit" name = "go" class="btn btn-success col-lg-3 col-sm-4 col-xs-5 col-md-4" style="margin:  0 0 0 22px">Подтвердить <i class="glyphicon glyphicon-chevron-right"></i></button></div>
           
              
               
            </div>
           
          </form>
         </div>
        </div>
    </div> 
</div>
<div class="container">
    
                <div class="row">
                <div class="panel-group">
                    <div class="col-lg-4"><div class="panel panel-success">
                        <div class="panel-heading">
                            p
                        </div>
                        <div class="panel-body">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse, cum.
                        </div>
                        <div class="panel-footer"><buttom class="btn btn-danger btn-right">next</buttom></div>
                </div></div>
                    <div class="col-lg-4"><div class="panel panel-success">
                        <div class="panel-heading">
                            p
                        </div>
                        <div class="panel-body">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse, cum.
                        </div>
                        <div class="panel-footer">23</div>
                </div></div>
                    <div class="col-lg-4">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                p
                            </div>
                            <div class="panel-body">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse, cum.
                            </div>
                            <div class="panel-footer">23</div>
                    </div>
                    </div>
                </div>
                </div>
            </div>


<footer class="footer">
    
</footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>

<?php
require_once 'connect.php';

$data = $_POST;
$errors = [];

if(isset($_POST['go'])){
	if(empty($data['login']) && empty($data['password']) && empty($data['password2']) && empty($data['email'])){
		$errors[] = 'Заполните поля ввода обозначенные *';
        exit();
	}
	if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
        $errors[] = 'E-mail указан неверно';
        }
    if($data['password'] != $data['password2']){
	    $errors[] = 'Введённые пароли не совпадают';
    }
    if(strlen($data['login']) > 20){
        $errors[] = 'Логин должен быть не больше 20 символов';
    }
    $sql = $dbconn->prepare('SELECT email FROM users WHERE email = :email');
    $sql->execute([
        ':email' => $data['email']
    ]);
    $result = $sql->fetch(PDO::FETCH_ASSOC);
	if($data['email'] == $result['email']){
		$errors[] = 'Такой E-mail уже существует';
    }
    if($_POST['sex'] == 0) {
        $sex = 0;
    }else{
        $sex = 1;
    }
    if(!empty($errors)){
        echo array_shift($errors); // Тут вывод ошибок
    }else{
        $sql = $dbconn->prepare('INSERT users VALUES (:login, :email, :password, :sex)');
        $sql->execute([
            'login' => $data['login'],
            'password' =>  password_hash($data['password'], PASSWORD_DEFAULT),
            'email' => $data['email'],
            'sex' => $sex
        ]);
    
        // $code = random_str(7);
        // $code = $_SESSION['code'];
        // mail($mail, 'Подтвердите регистрацию', '<b>Ваш код подтверждения:' .$code. '</b>');
        echo "Регистрация прошла успешно"; // Будет переадресацию тут не трогай
            //header('Location:/home')
    }
}
var_dump($_POST['sex']);
?>