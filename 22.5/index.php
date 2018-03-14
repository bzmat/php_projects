<?php 

require __DIR__.'/vendor/autoload.php';

$title = "Fruits";

$content = file('owoce.txt');

$s = new Smarty();

$s->assign('title', $title);

$s->assign('content', $content);

$s->display('index.tpl');

 ?>