<?php
/**
 * Created by PhpStorm.
 * User: farhad
 * Date: 11/26/17
 * Time: 4:37 PM
 */

namespace App\MyLibrary;

class MyFunction
{
    public static function GET_SESSION($var)
    {
        return $var.'-'.($var+1);
    }
}