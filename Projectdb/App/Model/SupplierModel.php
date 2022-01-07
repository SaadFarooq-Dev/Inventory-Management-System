<?php

include_once 'model.php';

class Supplier extends Model
{

    protected static function table()
    {
        return parent::$table = 'supplier';
    }
}
