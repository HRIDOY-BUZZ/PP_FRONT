<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Pagination\Factory;

class ProductController extends Controller
{
    public function paginate($items, $perPage = 24, $page = null, $options = [])
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

    public function relatedSearch($key,$id=0)
    {
        $context = ProductController::api_header();
        $key = trim($key);
        $url = $url = "https://www.pricepond.com.au/api/relatedSearch.php?pid=".$id."&q=".$key."&token=".md5(date("Ymd"));
        // echo $url."<br>";
        $json = file_get_contents($url, false, $context);
        // echo $json;
        $data = json_decode($json);

        return $data;
    }

    public function search(Request $req)
    {
        $context = ProductController::api_header();
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
                'query' =>  $query, 
                'min'   =>  $min, 
                'max'   =>  $max, 
                'rel'   =>  $rel
            ]
        );
    }

    public function store(Request $req, $store, $store_name)
    {
        // echo $store;
        $context = ProductController::api_header();
        $query = trim($req['q']);
        $uquery = urlencode($query);
        $min = trim($req['min']);
        $max = trim($req['max']);
        $rel = $req['relevance'];
        
        $url1 = "https://www.pricepond.com.au/api/store.php?store=".$store."&type=info&&token=".md5(date("Ymd"));
        // echo $url1."<br>";
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
        $context = ProductController::api_header();
        $url = "https://www.pricepond.com.au/api/product.php?pid=".$pid."&token=".md5(date("Ymd"));
        // echo $url."<br>";
        $json = file_get_contents($url, false, $context);
        // echo $json;
        $data = json_decode($json);

        $reldata = ProductController::relatedSearch($pname,$pid);

        $rdata = $this->paginate($reldata, 12);

        return view('pages.product', compact('data','rdata'));
    }

    public function event(Request $req, $eid, $ename)
    {
        $context = ProductController::api_header();
        
        $url = "https://www.pricepond.com.au/api/singleEvent.php?eid=".$eid."&token=".md5(date("Ymd"));
        // echo $url."<br>";
        $json = file_get_contents($url, false, $context);
        // echo $json;
        $array = json_decode($json);
        $data = $this->paginate($array);
        return view(
            'pages.event', 
            compact('data')
        );
    }
}