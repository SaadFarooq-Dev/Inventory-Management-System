<?php

include_once 'model.php';

class Customer extends Model
{

    protected static function table()
    {
        return parent::$table = 'customer';
    }

    public static function employee($employeeid)
    {

        $sql = "SELECT * FROM employee Where id= ?";
        return DB::query($sql, [$employeeid])->fetch();
    }
}
