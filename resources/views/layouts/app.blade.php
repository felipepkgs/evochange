<html>
<head>
    <title>{{ env('APP_NAME') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('layouts._navbar')
    <div class="main-container">
        @yield('content')
    </div>
</body>
</html>
