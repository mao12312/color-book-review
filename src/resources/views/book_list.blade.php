@extends('layouts.app')

@section('content')
    <body>
        <div class="asd">
            @include('partials.header')
        </div>
    <main>
        
        <div class="main">
            <div class="title">
                <h2>PRODUCT<span>本・作品</span></h2>
                <p>好きな本を選択してください。</p>
            </div>
    
            <div class="row align-items-center">
                @foreach ($book_lists as $book_list)
                    <div class="col-lg-3 product_card">
                        <a href="/book/create/{{$book_list->id}}">
                            <h6>{{$book_list->category}}</h6>
                            <div class="text_area">
                                <h4>{{ $book_list->title }}</h4>
                                <h5>作：{{$book_list->author}}</h5>
{{--                                <span><i class='uil uil-comment-alt-notes'></i> {{$review_counts[($book_list->id)-1]}} review</span>--}}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
    </body>
    <script>
        $(function(){   
            $('main').addClass('animated fadeIn');
            $('a').on('click',function(){
                $('main').addClass('animated fadeOut');
            });
        });
    </script>

@endsection    
