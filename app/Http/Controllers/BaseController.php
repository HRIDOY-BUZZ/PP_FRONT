<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Pagination\Factory;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactMail;

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

    public function paginate($items, $perPage = 24, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        $options = [
            'path' => Paginator::resolveCurrentPath()
        ];
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
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

        $url = "https://www.pricepond.com.au/api/allEvents.php?token=".md5(date('Ymd'));
        $json = file_get_contents($url, false, $context);
        $data = json_decode($json);

        return view('pages.allEvents', compact('data'));
    }

    public function deals()
    {
        $context = BaseController::api_header();
        
        $url = "https://www.pricepond.com.au/api/deals.php?token=".md5(date('Ymd'));
        // echo $url;
        $json = file_get_contents($url, false, $context);
        $array = json_decode($json);

        $data = $this->paginate($array, 36);

        return view('pages.allDeals', compact('data'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function contactPost(Request $req)
    {
        $to = $req->department;
        // $to = "xitalamin@gmail.com";
        $subject = "[CONTACT FORM]: ".$req->subject;
        $data = array();
        $data['name'] = $req->name;
        $data['email'] = $req->email;
        $data['subject'] = $subject;
        $data['message'] = $req->message;

        if(isset($req->phone) && $req->phone != "")
            $data['phone'] = $req->phone;
        else
            $data['phone'] = "Not Given";

        Mail::to($to)->send(new contactMail($data));
        return back()->with('message_sent', 'We have received your message and we would like to thank you for writing to us.');
    }
}