<?php

namespace c24\System;

use c24\Config\Config;

class Log
{
    private static function writeToLog($message)
    {
        $cleanup = ["\t", "\n"];
        $message = str_replace($cleanup, "", $message);
        file_put_contents(Config::LOG_PATH, $message . PHP_EOL, FILE_APPEND);
    }

    public static function Debug($message, $context = [])
    {
        Log::writeToLog("DEBUG: " . $message . " " . json_encode(print_r($context,true), JSON_PRETTY_PRINT ));
    }

    public static function Info($message, $context = [])
    {
        Log::writeToLog("INFO: " . $message . " " . json_encode(print_r($context,true), JSON_PRETTY_PRINT));
    }

    public static function Error($message, $context = [])
    {
        Log::writeToLog("ERROR: " . $message . " " . json_encode(print_r($context,true), JSON_PRETTY_PRINT));
    }
}