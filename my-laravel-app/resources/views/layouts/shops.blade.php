<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <div class="gmenu">
        <nav>
            <ul>
            <li><a href="">ホーム</a></li>
            <li><a href="">店舗入力</a></li>
            <li><a href="">店舗一覧</a></li>
            </ul>
        </nav>
        </div>
    </header>

    @yield('content')

</body>
</html>


