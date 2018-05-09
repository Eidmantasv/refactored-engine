<?php

$plotas = 3 * 5;
echo $plotas . '<br>';

function pranesimas()
{
    echo 'atlikta sėkmingai';
}

function plotas($r, $h)
{
    $plotas = M_PI * $h * $r * $r;
    echo $plotas . '<br>';
}

plotas (3, 5);
plotas (4, 7);
plotas (1, 3);

pranesimas();

echo '<br>';
function plotas2($r2, $h2)
{
    $plotas2 = M_PI * $h2 * pow($r2,  2);
    $plotas2 = round($plotas2);
    echo  $plotas2 . '<br>';
}

plotas2 (3, 5);
plotas2 (4, 7);
plotas2 (1, 3);

pranesimas();


