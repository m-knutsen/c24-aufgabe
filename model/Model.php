<?php


namespace c24\Model;


abstract class Model implements ModelInterface
{
    protected $table;
    protected $id;
    protected $data = [];

    public function __construct($data = [])
    {
        $this->data = $data;
    }

    public function set($key, $value){
        $this->data[$key] = $value;
    }

    public function get($key, $default = null){
        return $this->data[$key] ?? $default;
    }

}