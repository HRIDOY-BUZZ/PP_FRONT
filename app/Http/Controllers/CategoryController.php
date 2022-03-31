<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Pagination\Factory;

class CategoryController extends Controller
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

    public function categories($layer1="", $layer1Name="")
    {
        if(isset($layer1) && $layer1!="")
        {
            $context = CategoryController::api_header();
            $parent = $layer1;
            $url = $url = "https://www.pricepond.com.au/api/cats/categories.php?layer=2&parent=".$parent."&token=".md5(date("Ymd"));
            // echo $url."<br>";
            $json = file_get_contents($url, false, $context);
            // echo $json;
            $all = json_decode($json);
            $parent = $all->parent;
            $data = $all->children;
            // echo $layer1;
            return view('pages.allCategories', compact('data','parent'));
        }
        else
        {
            $context = CategoryController::api_header();
            $url = $url = "https://www.pricepond.com.au/api/cats/categories.php?layer=1&token=".md5(date("Ymd"));
            // echo $url."<br>";
            $json = file_get_contents($url, false, $context);
            // echo $json;
            $data = json_decode($json);
            return view('pages.allCategories', compact('data'));
        }
    }
    public function catProducts($layer, $layer1Name, $layer2Name="")
    {
        return view('pages.catProducts');
    }
}
