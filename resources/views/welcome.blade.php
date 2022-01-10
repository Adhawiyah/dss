<!DOCTYPE html>
@extends('layouts.app') 
<!--@extends('layouts.index') -->

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>dss</title>  

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            
            
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style> 
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="">Home</a>   
                        <a href="">Login</a>
                    @else 
                        <a href="/customer/login">CUSTOMER</a>  
                        <a href="/seller/login">SELLER</a>
                        <a href="/admin/login">ADMIN</a> 
                    <!--    @if (Route::has('register'))
                           <a href="{{ route('register') }}">Register</a>  
                        @endif -->
                    @endauth
                </div>
            @endif
        

            <div class="content">
                <div class="title m-b-md">
                    Daily Services System in Managing Business for Disabled People
                </div>

                <div class="links">
                   
<<<<<<< HEAD
                    <a href="">Services</a>
                    <a href="">Booking</a>
                    <a href="">Seller</a> 
=======
                    <a href="{{ route('services.index')}}">FACEBOOK</a>
                    <a href="{{ route('bookings.index')}}">CONTACT</a>
                    <a href="{{ route('sellers.index')}}">HOME</a> 
>>>>>>> 6179bf29ecc50aa7e12a18353187d82bde733dc1
                </div>
            </div>
        </div>
    </body>
</html>
