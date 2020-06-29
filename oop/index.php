<?php

// Release 0
echo '<h2>Release 0</h2>';
require('animal.php');

$sheep = new Animal("shaun");

echo $sheep->name.'<br>'; // "shaun"
echo $sheep->legs.'<br>'; // 2
echo $sheep->cold_blooded ? 'true' : 'false' . '<br>'; // false

echo '<pre>';
var_dump($sheep);
echo '</pre>';

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

// Release 1
echo '<h2>Release 1</h2>';

include('Ape.php');
include('Frog.php');

$sungokong = new Ape("kera sakti");
$sungokong->yell(); // "Auooo"
echo '<pre>';
var_dump($sungokong);
echo '</pre>';

echo '<br>';
$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"
echo '<pre>';
var_dump($kodok);
echo '</pre>';

?>