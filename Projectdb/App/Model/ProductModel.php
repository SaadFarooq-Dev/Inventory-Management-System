<?php

include_once 'model.php';

class Product extends Model
{

    protected static function table()
    {
        return parent::$table = 'product';
    }

    public static function supplierfind($supplierid)
    {

        $sql = "SELECT * FROM supplier Where id= ?";
        return DB::query($sql, [$supplierid])->fetch();
    }
    public static function categoryfind($categroyid)
    {

        $sql = "SELECT * FROM category Where id= ?";
        return DB::query($sql, [$categroyid])->fetch();
    }
}
