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
    [   'id' => 12,
        'marke' => 'audi',
        'model' => 'A6',
        'kubatura' => '1995',
        'metai' => 2018,
    ],
    [
        'id' => 22,
        'marke' => 'opel',
        'model' => 'corsa',
        'kubatura' => '995',
        'metai' => 2018,
    ],
    [
        'id' => 32,
        'marke' => 'bmw',
        'model' => 'M3',
        'kubatura' => '2995',
        'metai' => 2018,
    ]
];

$masyvas4 =[
    [   'id' => 52,
        'marke' => 'Ford',
        'model' => 'focus',
        'kubatura' => '1486',
        'metai' => 2017,
    ],
    [
        'id' => 62,
        'marke' => 'peugoet',
        'model' => '306',
        'kubatura' => '1895',
        'metai' => 2014,
    ],
    [
        'id' => 82,
        'marke' => 'VW',
        'model' => 'lupo',
        'kubatura' => '1395',
        'metai' => 2004,
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
print_r(array_merge($masyvas3, $masyvas4));
array_pop($prekes);
print_r($prekes);

array_push($prekes, 'miltai', 'sausainiai', 'kebabas');
print_r($prekes);

print_r (array_search('suris', $prekes));
echo '<hr>';
array_shift($prekes);
print_r($prekes);
echo '<hr>';
$prekiuKainos = [5, 4.3, 8, 15, 9, 2];
print_r(array_sum($prekiuKainos));
echo '<hr>';
$prekes1 = ['suris', 'desra', 'suris', 'duona'];
print_r(array_unique($prekes1));
echo '<hr>';

print_r(array_values($masyvas3[0]));

print_r(count($prekes1));

var_dump(in_array('audi', $masyvas3[0]));

$vaisiai = ['obuolys', 'kriause', 'vynuoge', 'braske'];
sort($vaisiai);
print_r($vaisiai);

print_r($masyvas3[2]['model']);

echo '</pre>';