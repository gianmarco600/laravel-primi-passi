<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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
            a{
                display: inline-block;
                margin: 50px

            }
            .title{
                width: 100%
            }

            h1{
                text-align: center;
            }
            .links{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="title"><h1>{{$title}}</h1></div>
        <div class="links">
            <a href="{{route('homepage')}}">home</a>
            <a href="{{route('about-us')}}">about us</a>
            <a href="{{route('contatti')}}">contatti</a>
        </div>
        <p>{{$parag}}</p>
    </body>
</html>
