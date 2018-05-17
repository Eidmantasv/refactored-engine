<?php

$masyvas = [1, 2, 3, 4, 6, 7];
$a = 3;
function doubleArrayValues($aarray) {
    foreach ($aarray as &$vaalue) {
        $vaalue = $vaalue ** 2;
    }
    return $aarray;
}

echo '<pre>';
print_r(doubleArrayValues($masyvas));
echo '</pre>';