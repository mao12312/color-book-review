@extends('layouts.app')
@section('content')
    <body>
    <div class="views" style="background: #FFA831;">
        <h6>漫画</h6>
        <div class="text_area">
            <h4>{{$book->title}}</h4>
            <h5>作：{{$book->author->author}}</h5>
        </div>
    </div>

    <div class="views_sticky">
        @include('partials.header')

        <main>
            <div class="title">
                <h2>PRODUCT<span>本・作品</span></h2>
            </div>

            <div class="row align-items-center">
                @foreach($book_lists as $book_list)
                    <div class="col-lg-3 product_card">
                        <a href="/book/create/{{$book_list->id}}">
                            <h6>{{$book_list->category}}</h6>
                            <div class="text_area">
                                <h4>{{ $book_list->title }}</h4>
                                <h5>作：{{$book_list->author->author}}</h5>
                                <span><i class='uil uil-comment-alt-notes'></i> 120 review</span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </main>
    </div>

    </body>
@endsection
