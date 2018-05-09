<?php

function buy($eggs = true)
{
    $milk = 1;
    if ($eggs == true) {
        $milk = 10;
    }
    echo $milk;
}

    buy(false);
    $number = 10;

    if ($number > 15) {
        echo 'tikrai taip';
    } elseif ($number > 5) {
        echo 'lyg ir taip';
    } else {
        echo 'tikrai ne';
    }

    echo '<br>';

    $prekesKiekis = 10;
    $norimasKiekis = 1;
    $galimaParduoti = true;

    if ($norimasKiekis <= $prekesKiekis || $galimaParduoti != false){
        echo 'dedam <br>';
    } else {
        echo 'nededm <br>';
    }