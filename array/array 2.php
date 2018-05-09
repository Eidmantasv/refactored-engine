<?php

$prekes = [
    'sviestas',
    'duona',
    'suris',
    'desreles',
    'pienas',
    'kecupas',
    'miltai',
];

$masyvas3 =[
    [
        'marke' => 'audi',
        'model' => 'A6',
        'kubatura' => '1995',
        'metai' => 2018,
    ],
    [
        'marke' => 'opel',
        'model' => 'corsa',
        'kubatura' => '995',
        'metai' => 2018,
    ],
    [
        'marke' => 'bmw',
        'model' => 'M3',
        'kubatura' => '2995',
        'metai' => 2018,
    ]
];

echo '<pre>';
print_r($prekes);
print_r(array_chunk($prekes, 3));
$arrayColumn = array_column(
  $masyvas3,
  'model',
  'marke'
);
print_r(array_column($masyvas3, 'model', 'marke'));
print_r($arrayColumn);
var_dump(array_key_exists(6, $prekes));
print_r(array_keys($arrayColumn));
echo '</pre>';