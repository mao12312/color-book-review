@extends('layouts.app')
@section('content')
    <body>
    <div class="book">
        <div class="book__page"></div>
        <div class="book__page"></div>
        <div class="book__page"></div>
    </div>

    <div id="main" style="display: none;">
        <div class="views" style="background: {{$author->average_color}};">
            <h6>{{$author->category}}</h6>
            <div class="text_area">
                <h4>{{$author->author}}</h4>
                <h5>代表作：{{$author->masterpiece}}</h5>
            </div>
            <a href="/author/chart/{{$author->id}}" style="opacity: 0.01"><i class='uil uil-cog '></i></a>
        </div>
    
        <div class="views_sticky">
            @include('partials.header')
            <main>
                <div class="title">
                    <h2>Creator<span>作家・クリエイター</span></h2>
                    <p>レビューされた色の平均化した色がこちらです。</p>
                </div>
    
                <div class="row align-items-center">
                    @foreach ($author_lists as $author_list)
                        <div class="col-lg-3 creator_card">
                            <a href="/author/create/{{$author_list->id}}" class="a">
                                <?php $image = $author_list->image; ?>
                                <img src="{{asset('Author_img/'.$image)}}" alt="" style="object-position: 0 25%;">
                                <div class="overlay" style=" opacity: 0.8; background: {{$author_list->average_color}};"></div>
                                <h6>{{$author_list->category}}</h6>
                                <div class="text_area">
                                    <h4>{{ $author_list->author }}</h4>
                                    <h5>代表作：{{$author_list->masterpiece}}</h5>
{{--                                    <span><i class='uil uil-comment-alt-notes'></i> {{$review_counts[($author_list->id)-1]}}review</span>--}}
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