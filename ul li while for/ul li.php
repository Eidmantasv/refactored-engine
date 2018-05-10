

<ul>
    <li>kaunas</li>
    <li>vilnius</li>
    <li>klaipeda</li>
</ul>

<select name="miestas">
    <option value="vilnius">Vilnius</option>
    <option value="kaunas" selected="selected">kaunas</option>
    <option value="klaipeda">klaipeda</option>
</select>

<?php

$masyvas = [
    0 => '1 kabinetas',
    1 => '2 kabinetas',
    2 => '3 kabinetas',
    3 => '4 kabinetas',
    4 => '5 kabinetas',
    5 => '6 kabinetas',
];



for($i = 0; $i < 5; $i++) {
    echo 'Labas' . '<br>';
}

//kiekis
$c= count($masyvas);

//ul + li+for
echo '<ul>';
for ($i = 0; $i < $c; $i++) {
    echo '<li>' .  $masyvas[$i] . '</li>' . '<br>';
}
echo '</ul>';

echo '<select name="kabinetai">';
for ($i = 0; $i < $c; $i++) {
    echo '<option value=' .$i . '>' .  $masyvas[$i] . '<br>';
}
echo '</select>';

//letters

for ($i = 'A'; $i != 'AD'; $i++) {
    echo $i . '&nbsp;&nbsp;&nbsp;&nbsp;';
}

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

$c = count ($masyvas3);

echo '<ul>';
for ($i = 0; $i < $c; $i++) {
    echo '<li>' . $masyvas3[$i]['marke'] . '</li>';
}
echo '</ul>';



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

$c= count($kabinets);
echo '<ul>';

for ($i = 0; $i < $c; $i++) {
    $k = count ($kabinets[$i]);
    for ($j = 0; $j < $k; $j++){
        echo '<li>' . $kabinets[$i][$j] . '</li>';
    }
}

echo '</ul>';
?>