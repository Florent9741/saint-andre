<!doctype html>

<html>
<head>
    @include('include.head')
</head>

<body>

    <header>
        @include('include.header')

    </header>

    <main>
        @yield('main')
    </main>

    <main>
        @yield('content')
    </main>
    
    <footer>
        @include('include.footer')
    </footer>


</body>
</html>
