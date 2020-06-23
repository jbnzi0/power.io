<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Power.io</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <style>
        
        html, body {
            color: #636b6f;
            background: rgb(15,5,76);
            background: linear-gradient(74deg, rgba(15,5,76,1) 50%, rgba(20,48,107,1) 70%);
            /*background-image: url('/img/bgcopy.jpg');*/
            background-size: auto;
            background-position: center center;
                            /* Background image doesn't tile */
            background-repeat: no-repeat;
            
            /* Background image is fixed in the viewport so that it doesn't move when 
                the content's height is greater than the image's height */
            background-attachment: fixed;
            
            /* This is what makes the background image rescale based
                on the container's size */
            background-size: cover;
            
            /* Set a background color that will be displayed
                while the background image is loading */
            background-color: #464646;
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
            color: white;
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
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="hold-transition sidebar-mini">
<div  id="app">
<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                       
                    @endauth
                </div>
            @endif

            <div class="content">
              

                <div class="links">
                  
                </div>
            </div>
        </div>
</div>

<script src="/js/app.js"></script>
</body>
</html>

<!--<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

      
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <style>
        
            html, body {
                color: #636b6f;
                background: rgb(15,5,76);
                background: linear-gradient(74deg, rgba(15,5,76,1) 50%, rgba(20,48,107,1) 70%);
                /*background-image: url('/img/bgcopy.jpg');*/
                background-size: auto;
                background-position: center center;
                                /* Background image doesn't tile */
                background-repeat: no-repeat;
                
                /* Background image is fixed in the viewport so that it doesn't move when 
                    the content's height is greater than the image's height */
                background-attachment: fixed;
                
                /* This is what makes the background image rescale based
                    on the container's size */
                background-size: cover;
                
                /* Set a background color that will be displayed
                    while the background image is loading */
                background-color: #464646;
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
                color: white;
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
        <div class="container" id="app">
            <navbar> </navbar>
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
-->
<!-- 

     <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                       
                    @endauth
                </div>
            @endif

            <div class="content">
              

                <div class="links">
                  
                </div>
            </div>
        </div>
-->
