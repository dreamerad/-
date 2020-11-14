<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>
    <link rel="stylesheet" href="css/style.css">
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
              <button class="navbar-toggle" data-toggle="collapse" data-target='.navbar-collapse'>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a href="#" class="navbar-brand">
                  RutBooks
              </a>
          </div>
          <div class="navbar-collapse collapse">
            <form action="#" class="navbar-form navbar-right">
                <div class="form-group ">
                    <label class="control-label" for="search"><input  class="control-input " type="text " id="search" style="height: 32px; margin-left: 15px; border-radius: 6px;"></label>
                    <button class="btn btn-success"><i class="glyphicon glyphicon-search"></i></button>
                    
                </div>

            </form>
              <ul class="nav navbar-nav navbar-right row text-center">
                    <li class="col-lg-4 col-md-4"><a href="#">Главная</a></li>
                    <li class="col-lg-6 col-md-6 active" ><a href="#">Сборник книг</a></li>
                    <li class="col-lg-2 col-md-2"><a href="#">Связь</a></li>
                   
              </ul>
              
          </div>
      </div>
</div> 
<!--  -->
<br>
<div class="container jumbotron">
    <div class="row">
            <div class="col-lg-8">
                <div class="row"><?php
                                $connest = mysqli_connect("localhost","root","","rutbooks") or die("не подключился ");
                                $q = mysqli_query($connest,"SELECT * FROM `books`");
                                while(($result = mysqli_fetch_assoc($q))){
                                    
                                

                        ?>
                    <div class="col-lg-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                            
                                <p class="text-center"><?php echo $result["название"] ?></p>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class=" col-lg-10  col-lg-offset-1">
                                        <img src="<?php echo $result["img"] ?>" class="img-responsive"  alt="#" style="height:267px" >
                                        
                                    </div>
                                </div>  
                            <br>
                                    <div class="row">
                                                <div class="col-lg-12 text-justify">
                                                    <?php echo substr($result["описание"],0,50)?>
                                                    <!-- <table class="table table-bordered">
                                                        <thead >
                                                            <tr>
                                                                <th class="text-center">Название</th>
                                                                <th class="text-center">Год</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-center">Beyond jQuery</td>
                                                                <td class="text-center">2016</td>
                                                            </tr>
                                                        </tbody>

                                                    </table> -->
                                                </div>
                                            </div>
                                    </div> 
                            <div class="panel-footer text-center ">
                                <a href="<?php echo $result["src"]?>" class="btn btn-success btn-lg" style="margin: 0 0 10px 0">скачать</a>
                            
                                <button class="btn btn-success btn-lg" style="margin: 0 0 10px 0;">купить</button>
                            
                            </div>              
                        </div>
                </div><?php }?>  
            </div></div>
            <div class="col-lg-4">
                <div class="row">
                                <div class="col-lg-12 col-lg-offset-1">
                                    <h3>Последние книги </h3>
                                    <div>
                                        <div class="oformlen">
                                            <h5>Автор: Xouli</h5>
                                            
                                            <p>Добавил книгу: jquery </p>
                                            <p>23.2.2020 15:23</p>
                                        </div>
                                        <div class="oformlen">
                                            <h5>Автор: Xouli</h5>
                                            
                                            <p>Добавил книгу: jquery </p>
                                            <p>23.2.2020 15:23</p>
                                        </div>
                                        <div class="oformlen">
                                            <h5>Автор: Xouli</h5>
                                            
                                            <p>Добавил книгу: jquery </p>
                                            <p>23.2.2020 15:23</p>
                                        </div>
                                        <div class="oformlen">
                                            <h5>Автор: Xouli</h5>
                                            
                                            <p>Добавил книгу: jquery </p>
                                            <p>23.2.2020 15:23</p>
                                        </div>
                                    </div>
                                </div>
                    </div>
    </div> 
        
            <!-- <div class="col-lg-3 ">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <p class="text-center">Angular</p>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class=" col-lg-10 col-lg-offset-1">
                                <img src="https://i109.fastpic.ru/big/2019/0416/f5/ef15226dee33a324630229397c3614f5.png?r=1" alt="#" class="img-responsive" >
                                
                            </div>
                        </div>  
                    <br>
                            <div class="row">
                                        <div class="col-lg-12 text-justify">
                                            Lorem ipsum dolor sit amet consectetuadipisicing elit. Quam cumque unde voluptate quisquam beatae, harum est non ipsam nobis illum magni excepturi nulla amet possimus nisi eaque ducimus culpa explicabo perspiciatis itaque natus, blanditiis temporibus. Architecto eius 
                                            <table class="table table-bordered table-responsive">
                                                <thead >
                                                    <tr>
                                                        <th class="text-center">Название</th>
                                                        <th class="text-center">Год</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">Angular. Сборник рецептов</td>
                                                        <td class="text-center">2008</td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                        </div> 
                        <div class="panel-footer text-center ">
                                            <a href="#" class="btn btn-success btn-lg" style="margin: 0 0 10px 0">Подробно</a>
                                            <button class="btn btn-success btn-lg" style="margin: 0 0 10px 0;">купить</button>
                        </div>         
                </div>
            </div> -->
            <!-- <div class="col-lg-5 col-lg-offset-1">
                <h3>Последние книги </h3>
                <div>
                    <div class="oformlen">
                        <h5>Автор: Xouli</h5>
                        
                        <p>Добавил книгу: jquery </p>
                        <p>23.2.2020 15:23</p>
                    </div>
                    <div class="oformlen">
                        <h5>Автор: Xouli</h5>
                        
                        <p>Добавил книгу: jquery </p>
                        <p>23.2.2020 15:23</p>
                    </div>
                    <div class="oformlen">
                        <h5>Автор: Xouli</h5>
                        
                        <p>Добавил книгу: jquery </p>
                        <p>23.2.2020 15:23</p>
                    </div>
                    <div class="oformlen">
                        <h5>Автор: Xouli</h5>
                        
                        <p>Добавил книгу: jquery </p>
                        <p>23.2.2020 15:23</p>
                    </div>
                </div>
            
                <!-- <div class="panel panel-success">

                </div> -->
            <!-- </div>  -->
        </div>
    
</div>
   <footer>
       
   </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>
</html>
