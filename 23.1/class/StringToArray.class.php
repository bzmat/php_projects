<?php 

class StringToArray{

	private $source;

	private $separator;

	public function __construct($source, $separator) {

		$this->source = $source;

		$this->separator = $separator;
	}

	public function string2VArray(){
    $linie  = explode("\n", trim($this->source));
    $liniec = count($linie);

    $linia     = explode($this->separator, trim($linie[0]));
    $liczbapol = count($linia);
    
    $t = array();
    for ($j = 0; $j < $liczbapol; $j++) {
        $t[$j] = array();
    }    

    for ($i = 0; $i < $liniec; $i++) {
        $linia = explode($this->separator, trim($linie[$i]));

        if (count($linia) !== $liczbapol) {
            return false;
        }

        for ($j = 0; $j < $liczbapol; $j++) {
            $t[$j][] = $linia[$j];
        }
    }

    $string_to_array = array(
        'rows'  => $liniec, 
        'cols'  => $liczbapol,
        'items' => $t
    );

    echo "<pre>";
    var_dump($string_to_array);
    echo "</pre>";
}

}

 ?>