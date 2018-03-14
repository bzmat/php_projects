<?php 

require __DIR__.'/vendor/autoload.php';

$title = "Irregular verbs";

$content = array();

$file = file('irregular-verbs.txt');

foreach ($file as $line) {
	
	$content[] = explode('|', trim($line));

	
}

$s = new Smarty();

$s->assign('title', $title);

$s->assign('content', $content);

$s->display('index.tpl');

 ?>