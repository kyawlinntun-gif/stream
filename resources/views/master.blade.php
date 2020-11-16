<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stream</title>

    {{-- app css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- bluma css --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
</head>
<body>

    <div id="app">

        @include('layouts.header')

        <div class="section">
            <div class="container">
                <router-view></router-view>
            </div>
        </div>

    </div>
    
    {{-- app js --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>