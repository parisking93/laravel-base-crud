<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <title>Document</title>
</head>
<body class="overflow-hidden">
    <div class="d-flex contenitore">
        @include('partials.headerBord')
        @include('partials.header')
        <main class="overflow-auto">@yield('main')</main>
    </div>
</body>
</html>