<?php

include_once 'model.php';

class Orders extends Model
{

    protected static function table()
    {
        return parent::$table = 'orders';
    }

    public static function customer($customerid)
    {

        $sql = "SELECT * FROM customer Where id= ?";
        return DB::query($sql, [$customerid])->fetch();
    }

    public static function count()
    {

        $sql = "SELECT count(*) as total FROM orders where MONTH(dateoforder) = MONTH(CURRENT_DATE())";
        return DB::query($sql)->fetch();
    }
}
