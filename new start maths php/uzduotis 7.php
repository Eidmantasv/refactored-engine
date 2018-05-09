<?php

function plytos($ilgis, $plotis, $gylis, $tarpai, $plt1, $plt2)
{
    $basplotas = ($ilgis * $plotis)  + $gylis * $ilgis * 2 + $gylis * $plotis * 2;
    $plytosplotas = $plt1 * $plt2;
    $ats = $basplotas / $plytosplotas;
    echo ceil($ats);
}

plytos (14, 6, 3, 0.004, 0.12,0.12);