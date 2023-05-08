<?php 
$string = file_get_contents("dischi.json");
var_dump($string);


$dischi_array = json_decode($string, true);
var_dump($dischi_array);


