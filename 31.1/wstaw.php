<?php 

require_once __DIR__. '/vendor/autoload.php';

require_once __DIR__.'/generated-conf/config.php';

$file = __DIR__.'/files/imiona.txt';

$names = array_map('trim', file($file));

foreach ($names as $name) {
	
	$obj_name = new Name();
	$obj_name->setName($name);
	$obj_name->save();
}



 ?>