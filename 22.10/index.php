<?php 

require __DIR__ . '/vendor/autoload.php';

$title = "Sachem";

$author = "Henryk Sienkiewicz";

$content = file('henryk-sienkiewicz-sachem.txt');

$s = new Smarty();

$s->assign('author', $author);

$s->assign('title', $title);

$s->assign('content', $content);

$s->display('layout.tpl');

 ?>