<?php

$vnt = 800;
$vntnori = 5;
$parduodama = true;

if ($vnt >= $vntnori && $vntnori > 0 && $parduodama = true){
    echo 'prekė įdėta sėmkingai. kiekis: ' . $vntnori . '<br>';
} elseif ($vntnori > $vnt) {
    echo 'neturim tiek prekių sandėlyje. likutis: ' . $vnt . '<br>';
} elseif ($vntnori <1 && $vntnori = null){
    echo 'nepažymėtas prekių kiekio laukelis.' . '<br>';
} elseif ($parduodama != true) {
    echo 'šiuo metu preke neprekiaujame';
} else {
    echo 'įvyko nenumatyta klaida';
}
?>