<?php

$data = (object) [
  'auto1' => 'BMW',
  'auto2' => 'Audi',
  'auto3' => 'Mercedes-Benz'
];

$data1 = new stdClass();
$data1->auto1 = 'BMW';
$data1->auto2 = 'Audi';
$data1->auto3 = "Mersedes-Benz";

echo '<pre>';
print_r($data);
print_r($data1);
echo '</pre>';


echo '<pre>';
echo $data-> auto1;
echo '<br>';
echo $data-> auto2;
echo '<br>';
echo $data-> auto3;
echo '<br>';

echo '</pre>';