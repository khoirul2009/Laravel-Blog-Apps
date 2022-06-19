<!doctype html>
<html lang="en" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width
    =device-width, initial-scale=1">
    <title>{{ $title }}</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">


</head>

<body>

    @include('dashboard.partials.header')
    <main class="lg:flex">
        @include('dashboard.partials.sidebar')
        @yield('main')
    </main>



    <script type="text/javascript" src="/js/trix.js"></script>
    <script src="/js/navbar.js"></script>
    <script src="/js/dashboard.js"></script>
</body>

</html>
