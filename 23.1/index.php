<?php 

require __DIR__ . '/vendor/autoload.php';

require __DIR__. '/class/StringToArray.class.php';

$source = file_get_contents('list/list.txt');

$separator = '*';

$s = new StringToArray($source, $separator);

$s->string2VArray();

/*$s = new Smarty();

$s->assign('content', $content);


$s->display('index.tpl');*/



 ?>