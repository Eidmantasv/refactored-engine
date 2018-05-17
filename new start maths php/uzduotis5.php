<?php

function bplotas($plotas, $x, $y)
{
    $plotaspl = $x * $y;
    $skaicius = $plotas / $plotaspl;
    echo ceil($skaicius);
}

bplotas(200, 0.15, 0.30);
