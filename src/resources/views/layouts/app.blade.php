<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Color Book Review</title>

    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous"
    >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link href="{{ asset('css/bookLoading.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/typewriter.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ asset('js/sample.js') }}" defer></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" crossorigin="anonymous"></script>
{{-- まず、ページ表示時にはレイヤーを非表示にするため、body要素から.fadeoutセレクタを取り除きます。 --}}
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
</body>
</html>