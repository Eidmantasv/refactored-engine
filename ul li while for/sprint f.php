<table>
    <tr>
        <th>name</th>
        <th>lastname</th>
    </tr>
    <tr>
        <td>Petras</td>
        <td>Petraitis</td>
    </tr>
    <tr>
        <td>Jonas</td>
        <td>Jonaitis</td>
    </tr>
</table>


<?php

$masyvas = [
    0 => '1 kabinetas',
    1 => '2 kaabinetas',
    2 => '3 kabinetas',
    3 => '4 kabinetas',
    4 => '5 kabinetas',
    5 => '6 kabinetas',
];

$masyvas3 =[
   0 => [
        'id' => 45,
        'marke' => 'audi',
        'model' => 'A6',
        'kubatura' => '1995',
        'metai' => 2018,
    ],
   1 => [
        'id' => 46,
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

foreach ($masyvas as $key => $value) {
    $masyvas[$key] = $value . '!';
}

foreach ($masyvas as &$value) {
    $value = $value . '?';
}

echo '<pre>';
print_r($masyvas);
echo '</pre>';

echo '<table border="10">';
echo '<tr>

<th>id</th>
<th>marke</th>
<th>modelis</th>
<th>kubatura</th>
<th>pagaminimo metai</th>
</tr>';
foreach ($masyvas3 as $automobilis) {
    echo '<tr>';
   /*
    echo '<td>' . $automobilis['id'] . '</td>';
    echo '<td>' . $automobilis['marke'] . '</td>';
    echo '<td>' . $automobilis['modelis'] . '</td>';
   */

    foreach ($automobilis as $tekstas) {
        echo '<td>' . $tekstas . '</td>';
    }

    echo '</tr>';
}

echo '</table>';

