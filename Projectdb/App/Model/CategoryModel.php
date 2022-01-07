<?php

include_once 'model.php';

class Category extends Model
{

    protected static function table()
    {
        return parent::$table = 'category';
    }
}
