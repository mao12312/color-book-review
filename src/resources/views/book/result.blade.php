@extends('layouts.app')
@section('content')
    <body>
    <div class="book">
        <div class="book__page"></div>
        <div class="book__page"></div>
        <div class="book__page"></div>
    </div>

    <div id="main" style="display: none;">
        <div class="views" style="background: {{$book->average_color}};">
            <h6>{{$book->category}}</h6>
            <div class="text_area">
                <h4>{{$book->title}}</h4>
                <h5>作：{{$book->author}}</h5>
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
                            <a href="/book/create/{{$book_list->id}}" style="background: {{$book_list->average_color}};">
                                <h6>{{$book_list->category}}</h6>
                                <div class="text_area">
                                    <h4>{{ $book_list->title }}</h4>
                                    <h5>作：{{$book_list->author}}</h5>
{{--                                    <span><i class='uil uil-comment-alt-notes'></i>  {{$review_counts[($book_list->id)-1]}}review</span>--}}
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </main>
        </div>
    </div>
    </body>
    
    <script>
    $(function(){
        $('.book').hide().fadeIn(2500);
        setTimeout(function(){
            $('.book').fadeOut(1000);
            $('#main').delay(1000).fadeIn(1000);
        },4000);
        $('a').on('click',function(){
            $('body').addClass('animated fadeOut');
        });
    });
    </script>

@endsection
