<?php 

include_once 'libs/Smarty.class.php';

$action = '404';

$wybrany = false;

$pliki = glob('foto/200/*.jpg');

$pliki_count = count($pliki);

$indexy = array();

foreach ($pliki as $key => $value) {
	
	$pozycja = array(
		'filname' => basename($value),
		'id' => $key + 1

	);

	array_push($indexy, $pozycja);
}

//walidacja


 ?>