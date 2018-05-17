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
/*
foreach ($masyvas6 as $value) {
    switch ($value) {
        case ($value['bank']) == 'swed':
            echo ($value['payment_title']) . '<br>';
            break;
        case ($value['bank']) == 'seb':
            printData($value);
            break;
        default:
            echo 'imposibru';
            break;
    }
}


function printData($paymentData)
{
    echo $paymentData['payment_title'] . ' ' . $paymentData['total'] . '<br>';
}
*/
paymentInfo($masyvas6);
function paymentInfo($masyvas6)
{
    foreach ($masyvas6 as $payment) {
        switch ($payment['bank']) {
            case 'swed':
                echo $payment['payment_title'] . '<br>';
                break;
            case 'seb':
                printData($payment);
                break;
            default:
                echo 'imposibru';
                break;
        }
    }
}
function printData($paymentData)
{
    echo $paymentData['payment_title'] . ' ' . $paymentData['total'] . '<br>';
}
