<div class="header">
    <video autoplay muted loop id="myVideo">
        <source src="{{asset('project_asset/video/rolexVideo.mp4')}}" type="video/mp4">

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
                    @if(Auth::check())
                    @if(Auth::user()->PhanQuyen == 'Admin')
                    <li><a href="{{url('product/list')}}"><i class="material-icons">watch</i></a></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                    @else
                    <li><a href="{{url('list/cart')}}"><i class="material-icons">shopping_cart</i></a></li>
                    <li><a href="{{url('profile')}}">Profile</a></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    @endif
                    @else
                    <li><a href="{{url('login')}}">Sign In</a></li>
                    <li><a href="{{url('register')}}">Sign Up</a></li>
                    @endif
                </ul>
            </div>
        </ul>

    </div>
    <div class="caption">
        <h1>
            Viet Rolex - Your time is finite, so don't waste it living someone else's life.
        </h1>

    </div>
    <div class="imgheader">
        <ul>
            <li>
                <img src="{{asset('project_asset/images/rolex.jpg')}}">
            </li>

            <li>
                <img src="{{asset('project_asset/images/imgheader.jpg')}}">
            </li>
            <li>
                <img src="{{asset('project_asset/images/rolex3.png')}}">
            </li>
        </ul>
    </div>

</div>
