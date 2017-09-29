<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('title')
    </title>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">WebSiteName</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Page 1</a></li>
                <li><a href="#">Page 2</a></li>
            </ul>
            @if (Route::has('login'))
                <div class="nav navbar-nav navbar-right">
                    @auth
                    {{--<a href="{{ url('/home') }}">Home</a>--}}
                    @else
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @endauth
                </div>
            @endif
        </div>
    </nav>
    @content
</div>
</body>
</html>