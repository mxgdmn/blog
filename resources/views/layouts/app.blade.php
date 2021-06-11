<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Template styles (https://getbootstrap.com/docs/5.0/examples/blog/) -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/template.css">
    <!-- My styles -->
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@include('includes.header')
<main class="container">
    @include('includes.messages')
    @if(Request::is('/'))
        @include('includes.hero')
        @include('includes.news')
    @endif
    <div class="row g-5">
        <div class="col-md-8">
            @yield('content')
        </div>
        <div class="col-md-4">
            @include('includes.aside')
        </div>
    </div>
</main>
@include('includes.footer')
<!-- Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
