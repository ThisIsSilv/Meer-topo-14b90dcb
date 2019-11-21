<?php


$array = array();
echo "Hoeveel landen wil je toevoegen?" . PHP_EOL;
$landen = readline();


for ($i = 1; $i <= $landen; $i++) {
    echo "Welk land wil je toevoegen?" . PHP_EOL;
    $land = readline();
    echo "Wat is de Hoofdstad van $land" . PHP_EOL;
    $stad = readline();

    $array[$land] = $stad;
}
echo "De volgende landen zitten in de database:" . PHP_EOL;
foreach ($array as $land => $stad) {

    echo " $land , $stad".PHP_EOL;
}
