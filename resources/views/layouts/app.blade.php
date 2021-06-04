<!doctype html>
<html lang="{{ app()->getLocale() }}" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="{{asset('img/ico/favicon.ico')}}" rel="shortcut icon"/> -->
    <title>@yield ('title')</title>
    <meta name="description" content="@yield('description')"/>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @yield('og')
    @yield ('style')    
</head>
<body id="app" class="container">

    @yield ('content')

<script  src="{{asset('/js/app.js')}}"></script>
@yield ('scripts')

</body>
</html>
