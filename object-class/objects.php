<?php

$array = [
    0 => 'Petras',
    1 => 'Antanas',
    2 => (object) [
      'vardas3' => 'Jonas',
    ],
];

$list = (object)[
  'duona',
  'suris',
  'desreles',
];


$obj = new stdClass();
$obj -> vardas1 = 'Petras';
$obj -> vardas2 = 'Antanas';
$obj -> mas = $array;

echo '<pre>';
print_r($array);
echo '<br>';
print_r($obj);

echo $array[1];
echo '<br>';

echo $obj-> vardas1;
echo '<br>';
print_r ($obj->mas);

echo $obj->mas[1];
echo $obj->mas[2]->vardas3;

print_r($list);
echo $list -> {0} ;

echo '</pre>';