<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyProduct;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $product = MyProduct::all();
        // return view('web.index',compact('product'));
        $client = new Client();
        $res = $client->request('GET', 'https://api.github.com/user', [
            'auth' => ['user', 'pass']
        ]);
    }
}
