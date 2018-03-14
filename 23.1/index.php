<?php 

include_once 'vh-array.inc.php';



$file = file_get_contents('00lista.log');

$tabl = string2VArray($file.'*');

var_dump($tabl);


 ?>