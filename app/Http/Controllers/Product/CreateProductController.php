<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MyProduct;
use App\User;
use Auth;
class CreateProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = MyProduct::all();
        return view('web.list-product',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCreate(){
        return view('web.create-product');
    }
    public function postCreate(Request $request)

    {
        $tbl_product = new MyProduct;
        $tbl_product->name = $request->name;
        $tbl_product->id_user = Auth::user()->id;
        $tbl_product->price = $request->price;
        $tbl_product->size = $request->size;
        $tbl_product->qty = $request->qty;
        $fileImage = $request->avatar;
        if(!empty($fileImage)){
            $tbl_product->images = $fileImage->getClientOriginalName();
            // var_dump($fileImage-getClientOriginalName());
            
        }
        else{
            return redirect('product/list')->with('success',__('You dont have images product'));
        }
        if($tbl_product->save()){
            if(!empty($fileImage)){
                $fileImage->move('project_asset/images/',$fileImage->getClientOriginalName());
            }
            return redirect('product/list')->with('success',__('You have successfully created the product'));
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
