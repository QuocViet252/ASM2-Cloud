@extends('layouts.auth')
@section('content')
<div id="wrap cart-page">
    <div class="title">
        <h2>My Product</h2>
    </div>
    @if(session('success'))
    <div class="alert alert-danger alert-dismissible">


        {{session('success')}}
    </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <table class="cart-table">
        <tr>
            <th>Product</th>
            <th>Size</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>


        @foreach($product as $value)
        <tr>

            <td>
                <div class="cart-info">
                    <img src="{{asset('project_asset/images/'.$value->images)}}">
                    <div>
                        <p>{{$value->name}}</p>
                        <small>Price:${{$value->price}}</small>
                    </div>
                </div>
            </td>

            <td>{{$value->size}}</td>
            <td>{{$value->qty}}</td>
            <td>
                <a href="{{url('product/delete'.$value->id)}}"><i class="material-icons">delete</i></a>

                <a href="{{url('product/edit'.$value->id)}}"><i class="material-icons">edit</i></a>


            </td>
        </tr>

        @endforeach

        <div class="add-product">
            <a href="{{url('product/add')}}">Add Product</a>
        </div>
    </table>







</div>
@endsection
