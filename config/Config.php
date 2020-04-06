<?php
namespace c24\Config;

class Config
{
    const DB_USER = "c24user";
    const DB_PASSWORD = "c24Secure123!";
    const DB_HOST = "db";
    const DB_PORT = "3306";
    const DB_DATABASE = "c24app";

    const DEFAULT_ACTION = "index";
    const DEFAULT_CONTROLLER = "home";
    const LOG_PATH = "./log/c24.log";

    public static function getDBDsn(){
        return "mysql:host=". Config::DB_HOST .";dbname=". Config::DB_DATABASE;
    }
}