<?php

include_once 'model.php';

class Payment extends Model
{

    protected static function table()
    {
        return parent::$table = 'payment';
    }
}
