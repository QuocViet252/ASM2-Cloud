@extends('layouts.auth')
@section('content')
<div id="wrap cart-page">
    <div class="title">
        <h2>My Cart</h2>
    </div>
    <table class="cart-table">
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Subtotal</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="{{asset('project_asset/images/rolex.jpg')}}">
                    <div>
                        <p>Rolex - T203</p>
                        <small>Price:$58.00</small>
                    </div>
                </div>
            </td>
            <td><input disabled="text" value="1"></td>
            <td>$58.00</td>
            <td>$58.00</td>
            <td>
                <a href=""><i class="material-icons">delete</i></a>
                <a href=""><i class="material-icons">minimize</i></a>
                <a href=""><i class="material-icons">add</i></a>


            </td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="{{asset('project_asset/images/rolex.jpg')}}">
                    <div>
                        <p>Rolex - T203</p>
                        <small>Price:$58.00</small>
                    </div>
                </div>
            </td>
            <td><input disabled="text" value="1"></td>
            <td>$58.00</td>
            <td>$58.00</td>
            <td>
                <a href=""><i class="material-icons">delete</i></a>
                <a href=""><i class="material-icons">minimize</i></a>
                <a href=""><i class="material-icons">add</i></a>


            </td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="{{asset('project_asset/images/rolex.jpg')}}">
                    <div>
                        <p>Rolex - T203</p>
                        <small>Price:$58.00</small>
                    </div>
                </div>
            </td>
            <td><input disabled="text" value="1"></td>
            <td>$58.00</td>
            <td>$58.00</td>
            <td>
                <a href=""><i class="material-icons">delete</i></a>
                <a href=""><i class="material-icons">minimize</i></a>
                <a href=""><i class="material-icons">add</i></a>


            </td>
        </tr>
    </table>
    <div class="total-price">
        <table>
            <tr>
                <td>Subtotal</td>
                <td>$200.000</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>$35.00</td>
            </tr>
            <tr class="total">
                <td>Total</td>
                <td>$235.00</td>
            </tr>
            <tr class="checkout-table">
                <td>

                </td>
                <td>
                    <div class="checkout">
                        <a href="">Checkout</a>
                    </div>
                </td>
            </tr>
        </table>

    </div>







</div>
@endsection
