@extends('layouts.log')

@section('content')
<div class="header" >
    <video autoplay muted loop id="myVideo">
        <source src="{{asset('project_asset/video/register.mp4')}}" type="video/mp4">
    </video>
    
    <div class="navbar">
        <ul>
            <li><a class="active" href="{{url('home')}}">Home</a></li>
            <li><a href="#news">News</a></li>
            <li class="logo"><a href="{{url('home')}}">Viet Rolex</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#about">About</a></li>
            <div class="navbar-sig">
                <ul>
                    <li><a href="{{url('login')}}">Sign In</a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </ul>
        
    
    
</div>

<div class="form-register">
    <h1>Sign Up</h1>
    <img src="{{asset('project_asset/images/rolex3.jpg')}}">
    <form action="{{ route('register') }}" method="post">
    @csrf
        <div>
            <label>Username</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong style="color:white">{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div>
            <label>Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong style="color:white">{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div>
            <label>Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong style="color:white">{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div>
            <label>Confirm Password</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
        <button class="btn-log" type="submit">Register</button>
    </form>
    <div class="forgot-pass">
        <input type="checkbox" name="remember" checked="checked">Remember me
        <a href="#">Forgot password?</a>
        
    </div>
    

    
</div>


@endsection
