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
print_r(array_merge($dalyviai, $dalyviai2));
echo '<hr>';
print_r(array_chunk(array_merge($dalyviai, $dalyviai2), 3));
echo '</pre>';