<?php

    include_once ('skaiciuotuvas.php');
    $zodziai = $_POST;

    $sum = $zodziai['text1'] . ' ' . $zodziai['text2'];

    $tekstas = 'vardas ir pavardė: ' . $sum;

    echo $tekstas;

    echo "<br>";

    $skaiciai = $_POST;

    $sum2 = $skaiciai['number2'] - $skaiciai['number1'];

    $likutis = 'pinigų likutis: ' . $sum2;

    echo ($likutis);
    echo '<br>';
    echo $skaiciai['number2'] / $skaiciai['number1'];
?>