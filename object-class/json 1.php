<?php

$content = file_get_contents('data.json');

$convertedToObject = json_decode($content);
$convertedToArray = json_decode($content, true);

echo '<pre>';
print_r($convertedToObject);
print_r($convertedToArray);
echo '</pre>';

echo json_encode($convertedToArray);