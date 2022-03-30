<?php

use Illuminate\Support\Facades\Auth;

if(!function_exists('encode_Url'))
{
    function encodeUrl($value)
    {
        $result = str_replace(array(" ","/","\/","%","'",":",";","|","&","(",")"), "_", $value);
        return $result;
    }
}