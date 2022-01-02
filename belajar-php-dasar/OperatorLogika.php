<?php

$gula = "manis";
$pare = "pahit";

// And
var_dump($gula == "manis" && $pare == "pahit");
var_dump($gula == "manis" and $pare == "pahit");

// Or
var_dump($gula == "manis" || $pare == "manis"); 
var_dump($gula == "manis" or $pare == "manis"); 

//Xor
var_dump(true xor true); 
var_dump(true xor false); 

// Not
var_dump(!true); 