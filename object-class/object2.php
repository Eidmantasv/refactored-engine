<?php

$data1 = new stdClass();
$data1->auto1 = 'BMW';
$data1->auto2 = 'Audi';
$data1->auto3 = "Mersedes-Benz";

foreach ($data1 as $value) {
    echo $value . '<br>';
}

foreach ($data1 as $autoKey => $autoValue) {
    echo $data1->$autoKey . '<br>';
}



echo '<pre>';
echo '</pre>';