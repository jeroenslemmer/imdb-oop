<?php

class Video {

	protected $name;
	protected $type = '';
	public $genres; 
	public $rating;
	
	function __construct($name, $genres, $rating){
		$this->name = $name;
		$this->genres = $genres;
		$this->rating = $rating;
	}

	function __toString(){
		$text = json_encode($this);
		return $text;
	}

	function setName($name){
		if (isset($name)){
			$this->name = $name;
		}
	}

	function getName(){
		return 'private prop:' . $this->name;
	}


}