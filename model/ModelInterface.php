<?php


namespace c24\Model;


interface ModelInterface
{
    public function save();
    public function destory();
    public function load($id);
}