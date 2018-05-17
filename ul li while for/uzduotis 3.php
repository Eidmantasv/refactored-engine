<?php

$masyvas = ['gandras', 'zvirblis', 'neateis', 888];

function firstlast($array)
{
    //masyvas
    $ret =[];

    //pirmas elementas
    $firstlast2 = array_shift($array);

    //paskutinis elementas
    $firstlast3 = array_pop($array);

    $ret[] = $firstlast2;
    $ret[] = $firstlast3;

    return $ret;
}
echo '<pre>';
print_r(firstlast($masyvas));
echo '</pre>';

/*

$f = array_shift($masyvas);
$g = array_pop($masyvas);
echo $f . ' ' . $g;

*/