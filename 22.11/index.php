<?php 

require __DIR__ . '/vendor/autoload.php';

$author = "Maria Konopnicka";

$title = "Nasza Szkapa";

$content = file('nasza-szkapa.txt');

$s = new Smarty();

$s->assign('author', $author);

$s->assign('title', $title);

$s->assign('content', $content);

$s->display('layout.tpl');

 ?>