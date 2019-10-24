<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Color Book Review</title>

    <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous"
    >
</head>
<body>
<header class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('') }}">
            Color Book Review
        </a>
    </div>

    <div class="container">
        <a class="navbar-brand" href="{{ url('/book_list') }}">
            Book
        </a>
    </div>

    <div class="container">
        <a class="navbar-brand" href="{{ url('/author_list') }}">
             Author
        </a>
    </div>
</header>

<div class="app">
    @yield('content')
</div>

<script src="{{ asset('js/app.js')}}"></script>
</body>
</html>