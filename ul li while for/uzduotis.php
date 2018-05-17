<?php

$masyvas = [4, 8, 2, 5];
function doubleArrayValues($array)
{
foreach ($array as &$value) {
    $value = $value *2;
}
return $array;
}

echo '<pre>';

print_r(doubleArrayValues($masyvas));

echo '</pre>';