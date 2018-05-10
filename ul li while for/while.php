<?php

$masyvas = [
    0 => '1 kabinetas',
    1 => '2 kabinetas',
    2 => '3 kabinetas',
    3 => '4 kabinetas',
    4 => '5 kabinetas',
    5 => '6 kabinetas',
];

$i = 0;


echo '<ul>';
while ($i < count($masyvas)) {
    echo '<li>' . $masyvas[$i] . '</li>';
    $i++;
}

unset($i);
unset($masyvas[2]);

echo '</ul>';

echo $i . '<br>';

echo '<pre>';
print_r($masyvas);
echo '</pre>';

$kabinets =[ 0 =>  [
    0 => '1 kabinetas',
    1 => '2 kabinetas',
    2 => '3 kabinetas',

],
    1 => [
        0 => '4 kabinetas',
        1 => '5 kabinetas',
        2 => '6 kabinetas',
    ]
];
$i = 0;
echo '<ul>';
while ($i < count($kabinets)) {
    $j = 0;

    while ($j < count($kabinets[$i])) {
        echo '<li>' . $kabinets[$i][$j] . '</li>';
            $j++;
    }
    $i++;
}
echo '</ul>';