@extends('layouts.app')

@section('content')
    <body>
    @include('partials.header')
    <main>
        <div class="book">
            <div class="book__page"></div>
            <div class="book__page"></div>
            <div class="book__page"></div>
        </div>

        <div class="typewrite" style="display: none;">
            <h1 class="line-1 anim-typewriter">Color Book Review</h1>
            <div class="loading3" style="display: none;">
                <h3 class="line-1" enter-class="animated fadeIn delay">“本”という文字情報を”色”という別の情報でレビューする</h3>
                <p>本の共感覚化としての⾊覚化
                    全く新しい情報だが、これが百年千年と続けば、
                    リテラシーは、後から追い付いてくるのではないか
                    千年後、この⺠主的な『COLOR BOOK REVIEW』は当たり前のように
                    読者の判断基準の⼀つになっているかも知れない</p>
            </div>
        </div>
        <div class="title">
            <h2>PRODUCT<span>本・作品</span></h2>
        </div>

        <div class="row align-items-center">
            @foreach ($book_lists as $book_list)
                <div class="col-lg-3 product_card">
                    <a href="/book/create/{{$book_list->id}}">
                        <h6>{{$book_list->category}}</h6>
                        <div class="text_area">
                            <h4>{{ $book_list->title }}</h4>
                            <h5>作：{{$book_list->author->author}}</h5>
                            <span><i class='uil uil-comment-alt-notes'></i> {{$review_counts[($book_list->id)-1]}} review</span>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </main>
    </body>
@endsection
<script>
$(function(){
    $('.book').hide().fadeIn(1000);

    setTimeout(function(){
        $('.book').fadeOut(1000);
        $('.typewrite').fadeIn(1000);
        setTimeout(function(){
            $('.loading3').fadeIn(1000);
        },5000);
    },5000);
    setTimeout(function(){
        $('.typewrite').fadeOut(1000);
        $('.main').delay(1000).fadeIn(1000);
    },12000);
});
</script>

