<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    {{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
        <div class="row">
            <div class="col-lg-6">
            @yield('secure_content')
            </div>
            <div class="col-lg-6">
            @yield('secure_content')
        </div>   
</body>
</html>