<?php 
$a = 1;
$b = "My name";
$c = true;
$f = 1.9;
$arr = [];
$object = new stdClass();

for($i = 0; $i < 100; $i+=2){
    $arr[] = $i * 2;
}

foreach ($arr as $key => $value){
if($key > 0 && $key % 2 == 0){
    echo'$key[' . $key . '] = $value[' . $value . ']<br/>';}
if($key == 10){
    break;
}
}
$k=0;
while($k < 100){
    echo' value $k is ' . $k;
    $k++;
}

$a = 10;
switch($a) {
    case $a < 2;
    break;
    case $a < 10;
    break;
    case 10;
    echo'$a is' . $a ;
    break;}
    
    