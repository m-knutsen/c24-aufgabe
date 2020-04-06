<?php

namespace c24\System;

use PDO;

class DB extends PDO
{
    public function __construct($dsn, $username = null, $passwd = null, $options = null)
    {
        parent::__construct($dsn, $username, $passwd, $options);
    }

    public function All($class){

    }
}