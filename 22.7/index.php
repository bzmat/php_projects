<?php 

require __DIR__. '/vendor/autoload.php';

$title = "Tatry";



$content = array();

foreach (file('tatry.txt') as $row) {
	
	 $tmp = explode('|', trim($row));

	$content[] = array(
			"peak" => trim($tmp[0]),
			"height" => trim($tmp[1])
	);


}

$s = new Smarty();

$s->assign('title', $title);

$s->assign('content', $content);

$s->display('index.tpl');

 ?>