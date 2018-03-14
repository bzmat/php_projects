<?php 

require_once __DIR__. '/vendor/autoload.php';

require_once __DIR__.'/generated-conf/config.php';

$names = NameQuery::create()->orderByName()->find();

$s = new Smarty();

$s->assign('names', $names);

$s->display('names.tpl');

 ?>