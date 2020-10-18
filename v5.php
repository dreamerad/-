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
$massS = ['','g','v','a','e','s','p','q','m'];

function pass ($massS,$num){
    $passord = '';
    $i = 0; 
    $ranN = '';
    while($i <= $num){ 
        $ran = rand(1,count($massS)-1);
        echo "пред ".$ranN.'! <br>';

                if(empty($ranN)){
                    $ranN = $ran; 
                    $passord .= $massS[$ran];  
                }elseif($ran == $ranN){

                    echo "ПОВТОР ".$ran. " !";
                    echo "ПОВТОР ".$ranN. " !";

                               continue;

                }else{
                $passord .= $massS[$ran];
                $ranN = $ran; 
                }
            
        
        $i++;
    }
    return $passord;
    }

echo pass($massS,5);
echo"\n!". $massS[8];