<?php 

require __DIR__.'/vendor/autoload.php';

$title = "Misie";

$content = file_get_contents('piosenka.txt');

$s = new Smarty();

$s->assign('title', $title);

$s->assign('content', $content);

$s->display('index.tpl');



 ?>