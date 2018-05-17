<?php

$masyvas6 = [
    [
        'bank' => 'swed',
        'payment_title' => 'Mokejimas uz prekes 1',
        'total' => 21.32,
    ],
    [
        'bank' => 'seb',
        'payment_title' => 'Mokejimas uz paslaugas',
        'total' => 32.52,
    ],
    [
        'bank' => 'dnb',
        'payment_title' => 'Mokejimas uz prekes 2',
        'total' => 12.84,
    ],
];
isvedimas($masyvas6);
function isvedimas($array) {
    foreach ($array as $payments) {
        if ($payments['bank'] == 'swed') {
            echo $payments['payment_title'];
            echo '<br>';
        } elseif ($payments['bank'] == 'seb') {
            printData($payments);
        } else {
            echo 'not posibru';
        }
    }
}

function printData($paymentData)
{
    echo $paymentData['payment_title'] . ' ' . $paymentData['total'] . '<br>';
}