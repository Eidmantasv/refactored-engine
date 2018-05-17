<?php

$masyvas1 = [0, 4, 1, 2, 2, 65, 3, 3, 4, 2];
$masyvas2 = ['Jonas', 'Petras', 'Antanas',];
$masyvas3 = [
    0 => [
        0 => '1 kabinetas',
        1 => '2 kabinetas',
        2 => '3 kabinetas',
    ],
    1 => [
        0 => '4 kabinetas',
        1 => '5 kabinetas',
        2 => '6 kabinetas',
    ],
];
$masyvas4 = [
    [
        'vardas' => 'Petras',
        'pavarde' => 'Petraitis',
        'amzius' => 23,
    ],
    [
        'vardas' => 'Jonas',
        'pavarde' => 'Jonaitis',
        'amzius' => 24,
    ],
    [
        'vardas' => 'Tomas',
        'pavarde' => 'Pavardenis',
        'amzius' => 33,
    ],
    [
        'vardas' => 'Vardas',
        'pavarde' => 'Jonusas',
        'amzius' => 28,
    ],
];
$masyvas5 = [
    [
        'marke' => 'Audi',
        'model' => 'A6',
        'kubatura' => 1995,
        'metai' => 2016,
    ],
    [
        'marke' => 'BMW',
        'model' => 'M3',
        'kubatura' => 2995,
        'metai' => 2018,
    ],
    [
        'marke' => 'BMW',
        'model' => '320',
        'kubatura' => 1999,
        'metai' => 2017
    ]
];

function ismetimas($array) {

    // grazina 1 reiksme
    $ret = [];

    $ret = array_pop($array);
    $ret = array_shift($array);

    return $ret;



    // grazina masyvą
    /*
    $ret = [
        $a = array_pop($array),
        $b = array_shift($array),
    ];
    return $ret;
    */
}

penktas($masyvas5);

function penktas($autos) {
    echo '<ul>';
    foreach ($autos as $auto) {
        echo '<li>' . $auto['marke']. ' ' . $auto['model'] . ' ' . transformYear($auto['kubatura'], 'cm3') .  transformYear($auto['metai']) . '</li>';
    }
    echo '</ul>';
}
// vienu metu ndexuojam
function transformYear($number, $year = 'm.'){
    return $number . '^^' . $year . '^^';
}



print_r(ismetimas($masyvas2));
print_r($masyvas2[1]);
print_r($masyvas1[5]);
print_r($masyvas3[1][2]);
echo '<hr>';
