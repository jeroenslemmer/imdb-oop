<?php


require_once "Video.php";
require "Film.php";

$film = new Film('Harry Potter en de magische cirkel',['fantasy','action'],4);


$film->setName('Jamesbond');

echo  $film;