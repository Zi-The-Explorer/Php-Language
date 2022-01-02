<?php

$first = [
    "first_name" => "Akhmad"
];

$last = [
    "last_name" => "Fauzi"
];

$full_name = $first + $last;

var_dump($full_name);   

// Membandingkan 
$a = [
    "first_name" => "Akhmad",
    "last_name" => "Fauzi"
];

$b = [
    "last_name" => "Fauzi",
    "first_name" => "Akhmad"
];

var_dump($a == $b);
var_dump($a === $b);