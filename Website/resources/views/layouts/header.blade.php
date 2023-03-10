<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">



</head>


<div class="container">
    <div class="left-header">
        <h2>EventTick</h2>
        <a href="/">Home</a>
        <a href="/products">Products</a>
        <a href="/aboutus">About Us</a>
        <a href="/contactus">Contact Us</a>
    </div>


    @guest

    <div class="right-header">
        <a href="/basket">Basket</a>
        <a href="/signup">Sign Up</a>
        <a href="/login">Login</a>
    </div>

    @endguest

    @auth



    <div class="right-header">
        <a href="/basket">Basket</a>
        <a href="/orders">Orders</a>


        <form action="/signout" method="post">
            @csrf
            <a>{{auth()->user()->name}}</a>
            <button type="submit">Sign Out</button>
        </form>
    </div>

    @endauth


</div>

<body>
    @yield('body')
</body>

</html>