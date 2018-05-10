<?php

$masyvas = [
    0 => '1 kabinetas',
    1 => '2 kabinetas',
    2 => '3 kabinetas',
    3 => '4 kabinetas',
    4 => '5 kabinetas',
    5 => '6 kabinetas',
];

$masyvas3 =[
   0 => [
        'marke' => 'audi',
        'model' => 'A6',
        'kubatura' => '1995',
        'metai' => 2018,
    ],
   1 => [
        'marke' => 'bmw',
        'model' => 'M3',
        'kubatura' => '2995',
        'metai' => 2018,
    ]
];

echo '<ul>';
foreach ($masyvas as $value) {
    echo sprintf('<li>%s</li>', $value);
}
echo '</ul>';


echo '<ul>';
foreach ($masyvas as $key => $value) {
    echo '<li>' . $key . ' = ' . $value . '</li>';
}
echo '</ul>';


echo '<ul>';
echo '<select name="masyvas">';
foreach ($masyvas as $key => $value) {
    echo '<option value="' . $key . '"> ' . $value . '</option>';
}
echo '</ul>';
echo '</select>';