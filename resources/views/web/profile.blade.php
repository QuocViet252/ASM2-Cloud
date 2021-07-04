@extends('layouts.log')
@section('content')
<div class="header">
    <video autoplay muted loop id="myVideo">
        <source src="{{asset('project_asset/video/loginForm.mp4')}}" type="video/mp4">
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
    <div class="form-profile">
        <h1>Profile</h1>
        @if(!empty(Auth::user()->images))
        <img src="{{asset('project_asset/images/'.Auth::user()->images)}}">
        @else
        <img src="{{asset('project_asset/images/user.png')}}">
        @endif
        <div class="content-profile">
            <div class="profile">
                <table>
                    <tr>
                        <td><i class="material-icons">person</i></td>
                        <td>{{Auth::user()->name}}</td>
                    </tr>
                    <tr>
                        <td><i class="material-icons">supervisor_account</i></td>
                        <td>{{Auth::user()->PhanQuyen}}</td>
                    </tr>
                    <tr>
                        <td><i class="material-icons">email</i></td>
                        <td>{{Auth::user()->email}}</td>
                    </tr>
                    <tr>
                        <td><i class="material-icons">phone</i></td>
                        <td>0899.240.561</td>
                    </tr>

                </table>


            </div>
            <div class="add-product btn-profile">
                <a href="">Update Profile</a>
            </div>

        </div>




    </div>
    @endsection
