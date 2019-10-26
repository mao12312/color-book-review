@extends('layouts.app')

@section('content')

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
            

    <div class="container mt-4 main" style="display: none;">
        @foreach ($book_lists as $book_list)
            <div class="card mb-4">
                <div class="card-header">
                    {{ $book_list->title }}
                </div>
                <div class="card-body">
                    <p class="card-text">
                       {{$book_list->author->author}}
                    </p>
                    <a class="card-link" href="/book/create/{{$book_list->id}}">
                        個別ページ
                    </a>
                </div>
                <div class="card-footer">
                    <span class="mr-2">
                        投稿日時 {{ $book_list->created_at->format('Y.m.d') }}
                    </span>
                </div>
            </div>
        @endforeach
    </div>
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
@endsection
