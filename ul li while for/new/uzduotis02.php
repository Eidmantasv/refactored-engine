<?php

$masyvas = [
    'Kinija',
    'Indija',
    'Japonija',
];

foreach ($masyvas as $country) {
    switch ($country) {
        case 'Indija':
            echo 'Keliaujam paganyti karvių.<br>';
            break;
        case 'Kinija':
            travelToChina();
            break;
        default:
            echo 'samsung <br>';
            break;
    }
}

function travelToChina() {
    echo 'kinų nauji metai jau praėjo <br>';
}