<!DOCTYPE html>
@extends('layouts.header')
@section('body')


<html>
    <head>
        <meta charset="utf-8">
        <title>Home</title>

        <style>
            .categories{
            
            display: flex;
            padding: 10px;
            justify-content: space-between;
            
            
            
        }
        </style>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ticket Selling Website</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
    </head>
    <body>
        <br>
    
        <div class = "display">
            <div class = "content">
                <h2>EventTick</h2>
                <br>
                <h3>Buy Tickets</h3>
                <span> Concerts & music events </span>
                <p>Attention all music lovers! Get ready to experience the thrill of live music!</p>
                <br>
                <p>We are excited to announce that tickets to the event are now on sale! Don't miss the chance to see your favorite artists perform live on stage, jamming out to the tunes that have become the soundtrack of our lives. With a lineup of world-class musicians, this event is sure to be a night to remember. Whether you're a fan of rock, pop, hip-hop,</p>
                <a href="/products" class="btn">buy now</a>
            </div>
            <div class = "content">
                <h3>Browse by genre</h3>
            <a href='/products/category/price_ascending'>Price-Low to High</a>
            <br>
            <a href='/products/category/price_descending'>Price-High to Low</a>
            <br>
            <a href='/products/category/pop'>Pop</a>
            <br>
            <a href='/products/category/metal'>Metal</a>
            <br>
            <a href='/products/category/rap'>Rap</a>
            <br>
            <a href='/products/category/rock'>Rock</a>
            <br>
            <a href='/products/category/country'>Country</a>
            </div>
            <div class = "content">
                <br>
                <br>
                <h3>Learn About Us!</h3>
                <span></span>
                <p>See our Vision</p>
                <br>
                <p>Learn more about our vission for the future of live music post pandemic and how we plan to keep the music industry going strong!</p>
                <a href="/aboutus" class="btn">About Us</a>
            </div>
            <div class = "content">
        </div>
        
    </body>

    
</html>
@endsection