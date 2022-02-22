<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                @if (Request::is('/'))
                    <div class="title m-b-md">
                        Pharmacy <br>
                        <img src="{{ asset('img/pharmacy-logo.jpg') }}">
                    </div>

                    <div class="links">
                        <a href="http://localhost:8000/catalog">Open Catalog</a><br>
                        
                    </div>
                @elseif (Request::is('catalog'))
                    <div class="btn-group" role="group">
                        <a href="http://localhost:8000/catalog/medicines"><button type="button" class="btn"><img style="height: 200px; width: 200px;" src="{{ asset('img/medicine.jpg') }}"><br> Medicines</button></a>       
                    </div>
                    <div class="btn-group" role="group">
                    <a href="http://localhost:8000/catalog/med_equip"><button type="button" class="btn"><img style="height: 200px; width: 200px;" src="{{ asset('img/med-equip.jpg') }}"><br> Medical Equipment</button></a>
                    </div>
                @elseif (Request::is('catalog/medicines'))       
                    <div class="list-group" style="text-align:left">
                        <a href="http://localhost:8000/medicines/1" class="list-group-item list-group-item-action"><img style="height: 100px; width: 100px;" src="{{ asset('img/medicine-1.jpg') }}"> Limcee Vitamin C 500mg</a>
                        <a href="http://localhost:8000/medicines/2" class="list-group-item list-group-item-action"><img style="height: 100px; width: 100px;" src="{{ asset('img/medicine-2.jpg') }}"> Holland & Barret Cod Liver Oil 410mg</a>
                        <a href="http://localhost:8000/medicines/3" class="list-group-item list-group-item-action"><img style="height: 100px; width: 100px;" src="{{ asset('img/medicine-3.jpg') }}"> Revital H</a>
                    </div>
                @elseif (Request::is('catalog/med_equip'))       
                    <div class="list-group" style="text-align:left">
                        <a href="http://localhost:8000/equipments/1" class="list-group-item"><img style="height: 100px; width: 100px;" src="{{ asset('img/med-equip-1.jpg') }}"> Polymed Pulse Oximeter CMS50C</a>
                        <a href="http://localhost:8000/equipments/2" class="list-group-item"><img style="height: 100px; width: 100px;" src="{{ asset('img/med-equip-2.jpg') }}"> OneTouch Select Plus Simple Glucometer</a>
                    </div>  
                @endif
            </div>
        </div>
    </body>
</html>
