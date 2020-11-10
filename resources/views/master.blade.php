<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stream</title>

    {{-- app css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <div id="app">

        <router-link to="/">Home</router-link>
        <router-link to="/about">About</router-link>

        <router-view></router-view>

        @yield('content')
    </div>
    
    {{-- app js --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>