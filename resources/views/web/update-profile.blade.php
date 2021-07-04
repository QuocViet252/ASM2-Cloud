@extends('layouts.log')
@section('content')
<div class="header" >
    <video autoplay muted loop id="myVideo">
        <source src="video/register.mp4" type="video/mp4">
    </video>
    
    <div class="navbar">
        <ul>
            <li><a  href="{{url('home')}}">Home</a></li>
            <li><a href="#news">News</a></li>
            <li class="logo"><a href="{{url('home')}}">Viet Rolex</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#about">About</a></li>
            <div class="navbar-sig">
                <ul>

                    @if(Auth::check())
                    <li><a href="{{url('list/cart')}}"><i class="material-icons">shopping_cart</i></a></li>
                    <li><a href="{{url('profile')}}">Profile</a></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
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
    <h1>Update Profile</h1>
    <img src="images/rolex3.jpg">
    <form action="">
        <label>Username</label>
        <input type="text" value ="Tran Quoc Viet" name="name" required>
        <label>Email</label>
        <input disabled type="email" value ="vietquoc@gmail.com" name="name"required>
        <label>Phone</label>
        <input type="text" value ="0899.240.561" name="name">
        <label>Avatar</label>
        <input type="file" name="avatar">
        <button class="btn-log" type="submit">Update Profile</button>
    </form>
    <div class="forgot-pass">
        <input type="checkbox" name="remember" checked="checked">Remember me
        <a href="#">Forgot password?</a>
        
    </div>
    

    
</div>
@endsection