<?php

$masyvas1 = [
    'isplauti indus',
    'isvalyti grindis',
    'isnesti siuksles',
    'pavedzioti sunis',
];

$masyvas2 = [
    0 => 'isplauti indus',
    1 => 'isvalyti grindis',
    2 => 'isnesti siuksles',
    3 => 'pavedzioti sunis',
];

$masyvas3 =[
    [
        'marke' => 'audi',
        'model' => 'A6',
        'kubatura' => '1995',
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
print_r ($masyvas1);
print_r ($masyvas2);
print_r ($masyvas3);
echo '</pre>';