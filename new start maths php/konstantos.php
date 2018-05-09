<?php

define('PAVADINIMAS', 'puslapis');
defined('KIEKIS', 10);

echo PAVADINIMAS;

if (defined('PAVADINIMAS'))
{
    echo PAVADINIMAS;
} else {
    echo 'Please define PAVADINIMAS';
}

$norimasKiekis = 3;
if (KIEKIS >= $norimasKiekis) {
    echo 'galime dėti į krepšelį';
} else {
    echo 'negalime dėti į krepšelį';
}