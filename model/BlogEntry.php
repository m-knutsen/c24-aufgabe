<?php


namespace c24\Model;


use c24\System\DB;

class BlogEntry extends Model
{

    public function __construct($data = [])
    {
        parent::__construct($data);
    }

    public function save()
    {
        // TODO: Implement save() method.
    }

    public function destory()
    {
        // TODO: Implement destory() method.
    }

    public function load($id)
    {
        // TODO: Implement load() method.
    }

    public static function loadAll(){
        $db = new DB();
        $query = "SELECT * FROM Blog";
        $statement = $db->prepare($query);
        $result = $statement->execute();
        //$statement->fetchAll()
    }
}