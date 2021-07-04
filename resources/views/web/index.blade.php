@extends('layouts.auth')
@section('content')

<div id="wrap cart-page">
    <div class="title">
        <h2>List Product</h2>
    </div>

    <div class="banner-footer">
        <video autoplay muted loop id="video-footer">
            <source src="https://content.rolex.com/dam/watches/hubs/all-watches/videos/hub-collection-watches-cover.mp4"
                type="video/mp4">
        </video>
        <div class="slider-cart">

            <div class="slides-cart">
                <figure>
                    <img src="{{asset('project_asset/images/rolex.jpg')}}">
                    <figcaption style="color: white">Rolex</figcaption>
                    <figcaption style="color: white">$45</figcaption>
                    <a class="addCart" href="#">Add To Cart</a>

                </figure>
                <figure>
                    <img src="{{asset('project_asset/images/rolex.jpg')}}">
                    <figcaption style="color: white">Rolex</figcaption>
                    <figcaption style="color: white">$45</figcaption>
                    <a class="addCart" href="#">Add To Cart</a>

                </figure>
                <figure>
                    <img src="{{asset('project_asset/images/rolex.jpg')}}">
                    <figcaption style="color: white">Rolex</figcaption>
                    <figcaption style="color: white">$45</figcaption>
                    <a class="addCart" href="#">Add To Cart</a>

                </figure>
                <figure>
                    <img src="{{asset('project_asset/images/rolex.jpg')}}">
                    <figcaption style="color: white">Rolex</figcaption>
                    <figcaption style="color: white">$45</figcaption>
                    <a class="addCart" href="#">Add To Cart</a>

                </figure>
                <figure>
                    <img src="{{asset('project_asset/images/rolex.jpg')}}">
                    <figcaption style="color: white">Rolex</figcaption>
                    <figcaption style="color: white">$45</figcaption>
                    <a class="addCart" href="#">Add To Cart</a>

                </figure>

            </div>
        </div>
    </div>

</div>

@endsection
