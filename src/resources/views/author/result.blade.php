@extends('layouts.app')
@section('content')
    <body>
    <div class="book" style="display: none;">
        <div class="book__page"></div>
        <div class="book__page"></div>
        <div class="book__page"></div>
    </div>

    <div id="main">
        <div class="views" style="background: {{$author->average_color}};">
            <h6>{{$author->category}}</h6>
            <div class="text_area">
                <h4>{{$author->author}}</h4>
                <h5>代表作：{{$author->masterpiece}}</h5>
            </div>
        </div>
    
        <div class="views_sticky">
            @include('partials.header')
            <main>
                <div class="title">
                    <h2>Author<span>作家・クリエイター</span></h2>
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
                                    <h5>代表作：{{$author_list->masterpiece}}</h5>
                                    <span><i class='uil uil-comment-alt-notes'></i> {{$review_counts[($author_list->id)-1]}}review</span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </main>
        </div>
    </div>
    </body>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
    $(function() {
    var h = $(window).height();
    
    $('#main').css('display','none');
    $('.book').height(h).css('display','block');
    });
    
    $(window).load(function () { //全ての読み込みが完了したら実行
    $('.book').delay(900).fadeOut(800);
    // $('.book').delay(600).fadeOut(300);
    $('#main').css('display', 'block');
    });
    
    //10秒たったら強制的にロード画面を非表示
    $(function(){
    setTimeout('stopload()',10000);
    });
    
    function stopload(){
    $('#main').css('display','block');
    $('.book').delay(900).fadeOut(800);
    $('#loader').delay(600).fadeOut(300);
    }
</script>

@endsection