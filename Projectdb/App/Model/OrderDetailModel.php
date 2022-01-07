<?php

include_once 'model.php';

class OrderDetail extends Model
{

    protected static function table()
    {
        return parent::$table = 'orderdetail';
    }

    public static function productfind($productid)
    {

        $sql = "SELECT * FROM product Where id= ?";
        return DB::query($sql, [$productid])->fetch();
    }


    public static function amountcount()
    {

        $sql = "SELECT sum(totalamount) as total FROM orderdetail where MONTH(date) = MONTH(CURRENT_DATE())";
        return DB::query($sql)->fetch();
    }


    public static function pending()
    {

        $sql = "SELECT count(*) as total FROM orderdetail where MONTH(date) = MONTH(CURRENT_DATE()) AND billnumber NOT IN (SELECT billnumber FROM payment)";
        return DB::query($sql)->fetch();
    }
}
