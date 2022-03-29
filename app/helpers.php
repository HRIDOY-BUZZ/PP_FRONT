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

if(!function_exists('imgCheck'))
{
    function imgCheck($url)
    {
        if (@getimagesize($url))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}