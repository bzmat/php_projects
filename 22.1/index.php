<?php 

require __DIR__.'/vendor/autoload.php';

$tplTresc = "Jak Kuba Bogu tak Bóg Kubie";

$s = new Smarty();

$s->assign('tplTresc', $tplTresc);

$s->display('index.tpl');

 ?>