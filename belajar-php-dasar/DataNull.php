<?php

$name = "Ozi";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

echo "name is null? : ";
var_dump(is_null($name));
echo "\n";

// Menghapus Variable 
$contoh = "this variable";
unset($contoh);
echo $contoh;

$contoh = "Value Contoh";
var_dump(isset($contoh));

echo "Apakah variable contoh beserta value nya ada? : \n";
if (isset($contoh) == true) {
    echo "Variable contoh ditemukan \nNilai variable nya = $contoh";
} else {
    echo "Variable / nilai variable tidak ditemukan";
}



