<?php

$values = array(1,2,3,4,5.40);
var_dump($values);

$names = ["Ozi", "Muhammad Zein", "Muhammad Adli Ilham"];
var_dump($names);

// Mengakses Data Array
echo "Data Array names pada index ke 0 adalah : "; 
echo $names[0];
echo "\n";

// Mengubah data array pada data index tertentu
$names[0] = "Akhmad Fauzi";
var_dump($names);

// Menambah data array pada posisi paling belakang
$names[] = "Irnawati Julianingsih";
var_dump($names);

// Menghapus Data Di Array, Index otomatis hilang dari array 
unset($names[3]);
var_dump($names);

// Mengambil total data di array
var_dump(count($names));

// ARRAY MAP
$ozi = array (
    "id" => "ozi",
    "name" => "Akhmad Fauzi",
    "age" => 24
);

$zein = [
    "id" => "zein",
    "name" => "Muhammad Zein",
    "age" => 26
];

var_dump($ozi["name"]);
var_dump($zein["name"]);

// Nested Array
$kanaya = [
    "id" => "Naya",
    "name" => "Aleyda Kanaya",
    "age" => 16,
    "Address" => [
        "city" => "Cianjur",
        "Country" => "Indonesia"
    ]
];

var_dump($kanaya);
var_dump($kanaya["Address"]["city"]);








