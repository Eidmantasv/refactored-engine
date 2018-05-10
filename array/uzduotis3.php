<?php

$dalyviai = [
    [
        'vardas' => 'Jonas',
        'pavarde' => 'Jonaitis',
        'amzius' => '45',
        'patirtis' => '10'
    ],
    [
        'vardas' => 'Petras',
        'pavarde' => 'Petraitis',
        'amzius' => '36',
        'patirtis' => '15'
    ],
];
$dalyviai2 = [
    [
        'vardas' => 'Juozas',
        'pavarde' => 'Juozaitis',
        'amzius' => '41',
        'patirtis' => '2'
    ],
    [
        'vardas' => 'Antanas',
        'pavarde' => 'Antanaitis',
        'amzius' => '60',
        'patirtis' => '40'
    ],
];

echo '<pre>';
$bendras = array_merge($dalyviai, $dalyviai2);
echo '<hr>';
print_r(array_chunk(array_merge($dalyviai, $dalyviai2), 3));
echo '<hr>';

/* istraukti dalyviu sarasa taip kad masyvo elementas butu pavarde
 o reiksme vardas ir is gauto masyvo patikrinti ar egzistuoja kokia
 nors pasirinkta pavarde, jei taip, tada isvesti dalyvio varda, jei
 ne isvesti i ekrana praneisma kad dalyvis neegzistuoja. */

$vardai = array_column($bendras, 'vardas', 'pavarde');
print_r($vardai);

if (array_key_exists('Antanaits', $vardai)) {
    echo ($vardai['Antanaitis']);
} else {
    echo 'nėra';
}
echo '</pre>';