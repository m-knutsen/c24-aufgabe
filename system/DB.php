<?php

namespace c24\System;

use c24\Config\Config;
use PDO;

class DB extends PDO
{
    public function __construct()
    {
        $options = [
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        ];
        parent::__construct(Config::getDBDsn(), Config::DB_USER, Config::DB_PASSWORD, $options);
    }
}