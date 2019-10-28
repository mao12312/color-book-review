@extends('layouts.app')

@section('content')
    <div class="header" style="display: none;">
        @include('partials.header')
    </div>
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

        <div class="main" style="display: none;">
            <div class="title">
                <h2>CREATOR<span>作家・クリエイター</span></h2>
            </div>
    
            <div class="row align-items-center">
                @foreach ($author_lists as $author_list)
                    <div class="col-lg-3 creator_card">
                        <a href="/author/create/{{$author_list->id}}">
                            <?php $image = $author_list->image; ?>
                            <img src="{{asset('Author_img/'.$image)}}" alt="" style="object-position: 0 25%;">
                            <div class="overlay"></div>
    
                            <h6>{{$author_list->category}}</h6>
                            <div class="text_area">
                                <h4>{{ $author_list->author }}</h4>
                                <h5>{{$author_list->masterpiece}}</h5>
                                <span><i class='uil uil-comment-alt-notes'></i>  {{$review_counts[($author_list->id)-1]}}review</span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
    <script>
        $(function(){
            $('.book').hide().fadeIn(1500);
        
            setTimeout(function(){
                $('.book').fadeOut(1000);
                $('.typewrite').fadeIn(1000);
                setTimeout(function(){
                    $('.loading3').fadeIn(1000);
                },5000);
            },5000);
            setTimeout(function(){
                $('.typewrite').fadeOut(1000);
                $('.main').delay(1000).fadeIn(2000);
                $('.header').delay(1000).fadeIn(2000);
            },12000);
        });
    </script>
@endsection