<!doctype html>
<html lang="en">

<head>
    @include('layout.head')
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        @include('layout.navbar')
    </nav>

    <main class="container">
        @yield('content')
    </main>

    @include('layout.js')
    @yield('scripts');
</body>

</html>
