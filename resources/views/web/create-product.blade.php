@extends('layouts.log')
@section('content')
<div class="header">
    <video autoplay muted loop id="myVideo">
        <source src="{{asset(project_asset/video/register.mp4')}}" type="video/mp4">
    </video>

    <div class="navbar">
        <ul>
            <li><a href="{{url('home')}}">Home</a></li>
            <li><a href="#news">News</a></li>
            <li class="logo"><a href="{{url('home')}}">Viet Rolex</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#about">About</a></li>
            <div class="navbar-sig">
                <ul>

                    @if(Auth::check())
                    <li><a href="{{url('list/cart')}}"><i class="material-icons">shopping_cart</i></a></li>
                    <li><a href="{{url('profile')}}">Profile</a></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    @else
                    <li><a href="{{url('login')}}">Sign In</a></li>
                    <li><a href="{{url('register')}}">Sign Up</a></li>
                    @endif
                </ul>
            </div>
        </ul>



    </div>

    <div class="form-register">
        <h1>Create Product</h1>
        <img src="{{asset('project_asset/images/rolex3.jpg')}}">
        <form action="{{url('product/add')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label>Name Product</label>
            <input type="text" name="name" required>
            <label>Price</label>
            <input type="text" name="price" required>
            <label>Size</label>
            <input type="text" name="size">
            <label>QTY</label>
            <input type="text" name="qty">
            <label>Avatar</label>
            <input type="file" name="avatar">
            <button class="btn-log" type="submit">Create Product</button>
        </form>




    </div>
    @endsection
