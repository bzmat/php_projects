<?php 

require __DIR__.'/class/FilesToList.class.php';

$source = 'agatha-christie-dane/';

$dir = 'list/';

$file_format = 'txt';


$i = new FileList($source, $dir, $file_format);

$i->create_index_file('|');

 ?>