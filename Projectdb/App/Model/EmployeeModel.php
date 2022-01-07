<?php

include_once 'model.php';

class Employee extends Model
{

    protected static function table()
    {
        return parent::$table = 'employee';
    }

    public static function roles($roleid)
    {

        $sql = "SELECT * FROM role Where id= ?";
        return DB::query($sql, [$roleid])->fetch();
    }



    public static function totalemployee()
    {

        $sql = "SELECT count(*) as total FROM employee";
        return DB::query($sql)->fetch();
    }
}
