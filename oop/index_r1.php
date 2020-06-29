<?php
include('Frog.php');
include('Ape.php');

// index.php
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
