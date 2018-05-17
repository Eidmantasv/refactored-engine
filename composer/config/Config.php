<?php
/**
 * Created by PhpStorm.
 * User: Eidmantas
 * Date: 2018.05.17
 * Time: 14:10
 */

namespace Config;


class Config
{
    private $conf = [
        'db' => [
            'type' => 'mysql',
            'host' => 'localhost',
            'port' => 3306,
            'dbname' => 'shop_eidmantas',
            'username' => 'shop_eidmantas',
            'password' => 'marsalas',
        ]
    ];
    public function getConfig($index = NULL)
    {
        if ($index != NULL){
            return $this->conf[$index];
        }

        return $this->conf;
    }
}
