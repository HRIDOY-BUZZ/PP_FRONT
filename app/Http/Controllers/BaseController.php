<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function home()
    {
        $context = stream_context_create(
            array(
                "http" => array(
                    "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36"
                )
            )
        );
        $url1 = "https://www.pricepond.com.au/api/home.php?slice=1";
        $url2 = "https://www.pricepond.com.au/api/home.php?slice=2";
        $url3 = "https://www.pricepond.com.au/api/home.php?slice=3";
        $json1 = file_get_contents($url1, false, $context);
        $json2 = file_get_contents($url2, false, $context);
        $json3 = file_get_contents($url3, false, $context);
        $data1 = json_decode($json1);
        $data2 = json_decode($json2);
        $data3 = json_decode($json3);
        return view('pages.home', compact('data1', 'data2', 'data3'));
    }
}
