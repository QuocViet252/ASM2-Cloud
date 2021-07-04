<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MyProduct;
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
        $product = MyProduct::all();
        return view('web.index',compact('product'));
    }
}
