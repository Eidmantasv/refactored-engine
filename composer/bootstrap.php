<?php

define ('ROOT_PATH', __DIR__);
require_once ROOT_PATH . '/vendor/autoload.php';

use Shop\Database;
use Config\Config;

$config = new Config();
//print_r($config->getConfig('db'));
$conn = new Database($config->getConfig('db'));

