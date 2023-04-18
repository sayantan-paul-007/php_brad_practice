<?php 
//     function add(){
//         echo 1+3;
//     }
// add();
// function userDetail($name, $email){
//     echo 'Name: '. $name. '<br> Email: ' .$email;
// }
// userDetail('Sayantan', 'sayantan@gmail.com');
function mulNum($a = 5,$b = 5){
    return $a*$b;
}
echo mulNum();

$sum = function($x,$y){
    return $x + $y;
};
echo $sum(25,45);

// Arrow function
$sub = fn($m, $n) => $m - $n;
echo '<br>'. $sub(56,45);