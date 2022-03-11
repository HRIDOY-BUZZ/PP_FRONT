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
    public function paginate($items, $perPage = 20, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        $options = [
            'path' => Paginator::resolveCurrentPath()
        ];
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

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

    public function search(Request $req)
    {
        $context = BaseController::api_header();
        $query = trim($req['q']);
        $uquery = urlencode($query);
        $min = trim($req['min']);
        $max = trim($req['max']);
        $rel = $req['relevance'];
        
        $url = "https://www.pricepond.com.au/api/search.php?q=".$uquery."&relevance=".$rel."&min=".$min."&max=".$max."&token=".md5(date("Ymd"));
        // echo $url."<br>";
        $json = file_get_contents($url, false, $context);
        // echo $json;
        $array = json_decode($json);
        $data = $this->paginate($array);
        // $data = Paginator::make($data, count($data), 5);
        return view(
            'pages.search', 
            compact('data'), 
            [
                'query' => $query, 
                'min' => $min, 
                'max' => $max, 
                'rel' => $rel
            ]
        );
    }

    public function store(Request $req, $store, $store_name)
    {
        // echo $store;
        $context = BaseController::api_header();
        $query = trim($req['q']);
        $uquery = urlencode($query);
        $min = trim($req['min']);
        $max = trim($req['max']);
        $rel = $req['relevance'];
        
        $url1 = "https://www.pricepond.com.au/api/store.php?store=".$store."&type=info&&token=".md5(date("Ymd"));
        echo $url1."<br>";
        $json1 = file_get_contents($url1, false, $context);
        $shop = json_decode($json1);
        $url2 = "https://www.pricepond.com.au/api/store.php?store=".$store."&type=products&q=".$uquery."&relevance=".$rel."&min=".$min."&max=".$max."&token=".md5(date("Ymd"));
        // echo $url."<br>";
        $json2 = file_get_contents($url2, false, $context);
        // echo $json;
        $array = json_decode($json2);
        $count = sizeof($array);
        $data = $this->paginate($array);
        return view(
            'pages.store', 
            compact('data'), 
            [
                'shop'  =>  $shop,
                'count' =>  $count,
                'query' =>  $query, 
                'min'   =>  $min, 
                'max'   =>  $max, 
                'rel'   =>  $rel
            ]
        );
    }

    public function product(Request $req, $pid, $pname)
    {
        return view('pages.product');
    }

    // STATIC PAGES
    public function about()
    {
        return view('pages.about');
    }
    public function policy()
    {
        return view('pages.policy');
    }
    public function faq()
    {
        return view('pages.faq');
    }
    public function terms()
    {
        return view('pages.terms');
    }
    public function cookies()
    {
        return view('pages.cookies');
    }
    public function desclaimer()
    {
        return view('pages.desclaimer');
    }
}