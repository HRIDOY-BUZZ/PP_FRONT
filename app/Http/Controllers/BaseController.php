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
        $url = "https://www.pricepond.com.au/api/home.php?slice=1";
        $json = file_get_contents($url, false, $context);
        $data = json_decode($json);
        
        $data1 = array_slice($data, 0, 12);
        $data2 = array_slice($data, 12, 12);
        $data3 = array_slice($data, 24, 12);
        return view('pages.home', compact('data1', 'data2', 'data3'));
    }
}
