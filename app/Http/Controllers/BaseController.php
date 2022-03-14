<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Pagination\Factory;

class BaseController extends Controller
{
    public function api_header()
    {
        $context = stream_context_create(
            array(
                "http" => array(
                    "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36"
                )
            )
        );
        return $context;
    }

    public function home()
    {
        $context = BaseController::api_header();
        $url = "https://www.pricepond.com.au/api/home.php?slice=mix";
        $json = file_get_contents($url, false, $context);
        $data = array(); $data1 = array(); $data2 = array(); $data3 = array(); $data4 = array(); $deal = array();
        $data = json_decode($json);
        
        if(sizeof($data)>0)
        {
            $data1 = array_slice($data, 0, 12);
            $data2 = array_slice($data, 12, 12);
            $data3 = array_slice($data, 24, 12);
        }

        $url = "https://www.pricepond.com.au/api/home.php?slice=slider";
        $json = file_get_contents($url, false, $context);
        $data4 = json_decode($json);

        $url = "https://www.pricepond.com.au/api/home.php?slice=stores";
        $json = file_get_contents($url, false, $context);
        $stores = json_decode($json);

        return view('pages.home', compact('data1', 'data2', 'data3', 'data4', 'stores'));
    }

    public function events()
    {
        $context = BaseController::api_header();

        return view('pages.allEvents');
    }

    public function deals()
    {
        $context = BaseController::api_header();

        return view('pages.allDeals');
    }
}