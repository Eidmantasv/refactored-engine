<?php

function bplotas($plotas, $x, $y, $tarpai)
{
    $plotaspl = ($x + $tarpai) * ($y + $tarpai);
    $skaicius = $plotas / $plotaspl;
    echo ceil($skaicius);
}

bplotas(200, 0.15, 0.30, 0.004);
