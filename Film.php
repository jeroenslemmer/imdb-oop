<?php

require_once "Video.php";

class Film extends Video{
	

	function __construct($name, $genres, $rating){
		$this->type = 'Film';
		parent::__construct($name, $genres, $rating);
	}

	function getName(){
		return 'filmnaam:' . $this->name;
	}

	public function genresToString(){
		$text = json_encode($this->genres);
		return $text;
	}

}