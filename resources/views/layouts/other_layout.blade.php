<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>
</head>
<body>
    @section('top_bar')
        <div>Esta é a barra do topo do layout!</div>
    @show
    <h1>Texto top do layout</h1>

    @yield('content')

    <h1>Texto bottom do layout</h1>

    <hr>

    @yield('bottom_bar')
</body>
</html>