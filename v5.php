<?php

$u = 12;
$ui = 42.43752;

echo round($ui,2);
class Point{
    private $x;
    public $y;
    private $z;
     public function __construct($t,$t1,$t2)
     {
         $this->x = $t;
         $this->y = $t1;
         $this->z = $t2;
     }
     public function getY()
     {
         return $this->y;    
     }
     public function getX()
     {
         return $this->x;    
     }
     public function setX($arg)
     {
         return $this->x = $arg;    
     }
     public function complex(){
         return (int)$this->x**2 - $this->y**2 ;
     }
}
$poi = new Point(21,45,1);
var_dump($poi->getY());
var_dump($poi->getX());
var_dump($poi->setX(421));
echo $poi->complex();

class home{
    public $countD = [];
    public function numCv($num){
        for($i = 1 ; $i < $num ; $i++){
               $this->countD[$i] = $i;
        }
    }
}
$empt = new home();
echo $empt->numCv(84);
print_r($empt->countD) ;
// var_dump($poi->getX());
// $summoc;
// for($i2 = 0; $i2 < 10 ; $i2++){
//     if($i2 == 0){
//         echo $summoc += 0;
//     }
    
//     if(strlen($summoc == 1)){
//       echo  $summoc += $i2;
//     }
//     // if(!$i2 == 0){
    //    echo  $ + $i2 ;
//     // }
// };
// function fibo($i) { 
//     if ($i == 0 ) return 0; 
//     if ($i == 1 || $i == 2) { 
//      return 1; 
//     } 
//     else { 
//      return fibo($i - 1) + fibo($i -2); 
//     } 
// $a = array(0, 1);
 
// for ($i = 2; $i < 200; $i++) {
//         $a[$i] = bcadd($a[$i-1], $a[$i-2]);
// }
 
// print_r(join(', ', $a));
// $massS = ['','g','v','a','e','s','p','q','m'];

// function pass ($massS,$num){
//     $passord = '';
//     $i = 0; 
//     $ranN = '';
//     while($i <= $num){ 
//         $ran = rand(1,count($massS)-1);
//         echo "пред ".$ranN.'! <br>';

//                 if(empty($ranN)){
//                     $ranN = $ran; 
//                     $passord .= $massS[$ran];  
//                 }elseif($ran == $ranN){

//                     echo "ПОВТОР ".$ran. " !";
//                     echo "ПОВТОР ".$ranN. " !";

//                                continue;

//                 }else{
//                 $passord .= $massS[$ran];
//                 $ranN = $ran; 
//                 }
            
        
//         $i++;
//     }
//     return $passord;
//     }

// echo pass($massS,5);
// echo"\n!". $massS[8];

function sumSred(...$cu){
       $sum = 0;
       $countE = count($cu)-1;
       $i3 = 0;
       while($i3 < $countE){
            $sum += $cu[$i3];
            $i3++;
       }
       return round($sum/$countE);
}
echo sumSred(323,242,475,234);

function S(){
    $sy = 0;
    $si = 1;
    // echo " " . 1;
        while($si < 112){
            echo' '. $si . ' ';
            $si += 3;
            $sy += $si ;
        }
        return $sy +  1;
}
echo S();
echo date_default_timezone_get('').'<br>';
echo "<pre>".
print_r(localtime(time(),true)) ;
echo date('P');
echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="text">
        <input type="submit" value='поиск' name="ok">
    </form>
    <form method="POST">
        <select name="select">
            <option>Турция</option>
            <option>Египет</option>
            <option>Италия</option>
        </select></br></br>
        <label for="num">Сколько у вас свободных дней?</label></br></br>
        <input type="number" name="num" max="28" min="1">
        </br></br>
        <label for="discount "> у вас есть скидка?</label>
        <input type="checkbox"  name="discount">
        <input type="submit" value='поиск' name="okOne">
    </form>
  

<?php
    function quer(){
        $con = new mysqli('localhost','root','','proba') or die('no');
        $con->query("SET NAMES 'utf8'");
        $metd = $_POST['text'];
        $ok = $_POST['ok'];

            if(isset($ok)){
            $sql = "SELECT name , saerch FROM tabls WHERE name = '$metd' ";
            $resuit = $con->query($sql);

                    while(($o = $resuit->fetch_assoc()) != false){
                        printf($o['name'].' '.$o['saerch']. ' ');
                    }
        }else{
            echo '';
        
         
        }
         $con->close();
    };
    quer();

        function countries(){
            $select = $_POST['select'];
            $diC = $_POST['discount'];
            $nums = $_POST['num'];
            $okOne = $_POST['okOne'];
            if(isset($okOne)){
                $snum = $nums * 400;
                if($select == 'Египет'){
                    $snum =$snum + ($snum*(10/100));
                }elseif($select == 'Италия'){
                    $snum = $snum + ($snum*(12/100));
                }
                if($diC == TRUE){
                    $snum = $snum - ($snum*(5/100));
                }
                return $snum;
            }
        }
        echo "Ваша сумма отдыха будет составлять : ".countries() . " рублей";

   
     echo date(" j.m.y ", filectime("v4.php"));
     function Vova($numer){
         echo "</br>".date("N", time())."</br>";
         echo date("N", time()+86400*$numer);
         
     }
     echo Vova(3);
     function Zadacha2(){
         $text = $_POST['vtext'];
         $btn = $_POST['okei'];
         $textAr = " </br></br></br>Lorem color ipsum dolor sit. color";
         if(isset($btn)){
            //  $u = preg_match("/$text/gi",$textAr);
            // echo $u ; 
            // strpos($text,$textAr);
           $te = str_replace($text,"<mark>$text</mark>",$textAr);
           return $te;
         }
         
     } echo Zadacha2();
    
     function z20(){
         $arrey = array(1,1,1,2,2,2,2,3);
         foreach($arrey as $index ){
             
             if(!$arrey[$index]){
                $arrey[$index] = $index;
                echo  $arrey[$index] . '</br>';
                
             }
            
         }
        
     }
    print_r(z20());
?>  </br></br><form method="POST"> 
    
        <input type="text" name = 'vtext'>
        <input type="submit" value="найти" name="okei"></br>
        </br> <textarea name="arw">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos asperiores eius accusamus, deleniti quaerat facere deserunt. Suscipit doloribus iure repellendus cum.</textarea>
    </form>
    <?php
    ## задача 1 
    $arrat = [12,34,64,-3,2,-23,1338,332,23,-45];
    $sum2 = 0;
    $numer = 1;
    foreach($arrat as $elem){
        if($elem >= 0 && $elem % 2 == 0){

         echo " </br>".$numer."  итерация " .$sum2 += $elem. "</br> " ;
         $numer++;
        }
        // echo $sum2;
    }
    echo "</br>Сумма =  ".$sum2;
    ##
    ## задача 2
    $array3 = [1,2,3,44,44];
    $countArray3 = (array_count_values($array3)) ;
    $nom21 = (int) max($countArray3) ;
    $result = '';
    foreach($countArray3 as $key => $val){
        if($val == $nom21){
            $result .= $key;
        }
    }
    echo "</br> Самое повторяемое число: ". $result;
    ##
    ?>
    </br>
    </br>
    <form method='POST'>
     <input type = "number" name = "NuM" min = '0' max = '100' >
     <input type = "submit" value = "Дать ответ" name="okNuM">
    </form>
    <?php
      
       $RAN = rand(0,100);
                                function Gamer( $RAN)
                                {            $ansver = $_POST['NuM'];
                                             $btn1 = $_POST['okNuM'];
                                                            
                                                            $popt = 0;
                                                            
                                                              if(isset($btn1)){
                                                                  while(true){
                                                                if($popt == 11){
                                                                    echo "Ваши попытки закончились";
                                                                    
                                                                }

                                                                if($ansver == $RAN){
                                                                    echo  "Вы угадали"; 
                                                                    return;
                                                                   
                                                                }
                                                                elseif($ansver < $RAN){
                                                                    echo "Число Больше :" . $ansver;
                                                                    $popt++;
                                                                } 
                                                                elseif($ansver > $RAN){
                                                                    echo "Число меньше :" . $ansver;
                                                                    $popt++;
                                                                }
                                                    }  
                                                            }
                                                    
                                       
                                        echo " " . $RAN;
                                }
           echo  Gamer( $RAN);
           // Пасхалка))
    ?>
</body>
</html>