<?php

$getal = 10;
var_dump(is_int($getal));

$klas = ["Piet van Dijk", "Rembrandt van Rijn", "Vincent van Gogh", "Floris van Dyck"];


echo var_dump($klas);

for ($x = 0; $x <= 3; $x++) {
    echo $klas[$x] . PHP_EOL;
}


foreach ($klas as $naam) {
    echo $naam . PHP_EOL;
}

//Combinatie Opdracht
$bucket_list = array();

$hoeveelheid_activiteiten = (int)readline('Hoeveel activiteiten wil je toevoegen aan je bucket list? '); 

for ($i=0; $i < $hoeveelheid_activiteiten; $i++) {
    array_push($bucket_list, $activity = readline("Welke activiteiten wil je toevoegen? "));
    readline_add_history($activity);
}

echo var_dump($bucket_list);

foreach ($bucket_list as $activiteit) {
    echo $activiteit . PHP_EOL;
}

?>