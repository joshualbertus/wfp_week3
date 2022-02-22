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
                <div class="card" style="width: 18rem;">
                    @if ($type == 'medicines')
                        <img class="card-img-top" style="height: 200px; width: 200px;" src="{{ asset('img/medicine-'. $id . '.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            @if ($id == 1)
                                <h5 class="card-title">Limcee Vitamin C 500mg</h5>
                                <p class="card-text">Limcee Vitamin C 500 mg Orange Flavour Chewable, 15 Tablets belongs to a class of medicines called nutritional supplements used to prevent and treat nutritional deficiencies and vitamin C deficiency. A nutritional deficiency occurs when the body does not absorb or get enough nutrients from food. Vitamins and minerals are necessary for body development and the prevention of diseases</p>
                            @elseif ($id == 2)
                                <h5 class="card-title">Holland & Barrett Cod Liver Oil 410 mg</h5>
                                <p class="card-text">The goodness of pure cod liver oil, Omega-3, and vitamins A & D now in Holland & Barrett Cod Liver Oil 410 mg Capsules. Its special formulation provides multi-health benefits. Now get a healthy immune system and check your blood cholesterol and pressure with these capsules.</p>
                            @else
                                <h5 class="card-title">Revital H</h5>
                                <p class="card-text">Revital H is a nutraceutical for daily health with a combination of 10 Vitamins, 9 Minerals and Ginseng in appropriate concentrations. It increases oxygen consumption in the body and helps to maintain energy & stamina through the day</p>
                            @endif    
                        </div>
                    @else
                    <img class="card-img-top" style="height: 200px; width: 200px;" src="{{ asset('img/med-equip-'. $id . '.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            @if ($id == 1)
                                <h5 class="card-title">Polymed Pulse Oximeter CMS50C</h5>
                                <p class="card-text">Bring home the Polymed Pulse Oximeter CMS50C and experience the comfort of keeping track of your oxygen saturation levels. It is designed to let you conveniently monitor the SpO2 and pulse rate at the same time.</p>
                            @else
                                <h5 class="card-title">OneTouch Select Plus Simple Glucometer </h5>
                                <p class="card-text">TOneTouch Select Plus Simple is a blood glucose monitoring system. OneTouch® Select Plus Simple® meter system. Simple to use, Accurate and virtually pain free. OneTouch® is the #1 recommended brand by diabetologists in India* (*In a survey conducted in India in 2020 with 150 diabetologists).</p>
                            @endif    
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>
