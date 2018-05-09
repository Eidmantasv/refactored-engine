<?php

function kiekLaiko($valandos)
{
    $dienos = floor($valandos / 24);
    $valand = $valandos - ($dienos * 24);
    echo 'turim: ' . $dienos . 'dieną(as) ' . 'ir ' . $valand . 'valandas(ų)';
}

kiekLaiko (270);