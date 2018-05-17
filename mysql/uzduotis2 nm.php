<?php

try {
    $username = 'Eidmantas';
    $pass = 'marsalas';

    $dht = new PDO(
        'mysql:host=localhost:3306;dbname=eidmantas',
        $username,
        $pass
    );
//    echo 'connected? arent we?';
} catch (PDOException $exception) {
    echo 'Error: ' . $exception->getMessage();
}