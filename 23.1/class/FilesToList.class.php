<?php 

class FileList{

	private $source;

	private $dir_index;

	private $file_format;

	public function __construct($source, $dir, $file_format){
		$this->source = $source;

		$this->dir_index = $dir;

		$this->file_format = $file_format;
	}

	public function create_index_file($separator){

		$files_list = glob($this->source.'*.'.$this->file_format);

		$score = '';

		foreach ($files_list as $file_list) {
			
			$tmp = file($file_list);

			$e = explode($separator, trim($tmp[0]));

			$score .= trim($e[1]) . '*' . $file_list . "\r\n";
		}

		file_put_contents($this->dir_index.'list.txt', $score);
	}
}

 ?>