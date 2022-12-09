<!doctype html>
<html>
<head>

    @include('template.header')
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>