<?php

$host = 'localhost';
$username = 'Eidmantas';
$password = 'marsalas';
$dbName = 'eidmantas';
$port = '3306';

$db = mysqli_connect($host, $username, $password, $dbName, $port);

if(!$db) {
    die ('connecction error: ' . mysqli_connect_error());
}

echo 'connected succussfully';

$sql = "CREATE TABLE IF NOT EXISTS `products` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` TEXT NOT NULL,
  PRIMARY KEY (`id`)
)ENGINE ='InnoDB' CHARACTER SET utf8";


$sql2 = "CREATE TABLE IF NOT EXISTS `product_options` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `option_type` NOT NULL,
  `option_value` NOT NULL,
  PRIMARY KEY (`id`)
)ENGINE ='InnoDB' CHARACTER SET utf8";

mysqli_query($db, $sql);
mysqli_query($db, $sql2);

$sql3 = "INSERT INTO `products` (`id`, `title`)
    VALUES (
    AUTO_INCREMENT,
    'titlas'
    )
";

$sql4 = "INSERT INTO `product_options` (`id`, `product_id`, `option_type`, `option_value`)
    VALUES (
    AUTO_INCREMENT,
    AUTO_INCREMENT,
    'size',
    'nezinau',
    )
";

mysqli_query($db, $sql3);
mysqli_query($db, $sql4);

$sql5 = "SELECT products.*, product_options
FROM `products`
JOIN `products` ON `product_options`";

