<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Primi Passi</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 2rem;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .links {
            padding: 2rem 0;
        }

        .links a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

    </style>
</head>

<body>
    <div class="content">
        <header class="links">
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('contact') }}">Contact</a>
            <a href="{{ route('shop') }}">Shop</a>
            <a href="{{ route('gallery') }}">Gallery</a>
        </header>
        <div class="title m-b-md">
            <h1>{{ $title }}</h1>
        </div>
    </div>
    </div>
</body>

</html>
