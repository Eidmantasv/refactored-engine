<?php

$masyvas2 = ['Jonas', 'Petras', 'Antanas'];


function masyvas($array) {
    $b = count($array);
    echo '<ul>';
    for ($a = 0; $a < $b; $a++) {
        echo '<li>' . $array[$a] . '<br>' . '</li>';
    }
    echo '</ul>';
}

masyvas($masyvas2);
