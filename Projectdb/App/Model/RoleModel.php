<?php

include_once 'model.php';

class Role extends Model
{

    protected static function table()
    {
        return parent::$table = 'role';
    }
}
