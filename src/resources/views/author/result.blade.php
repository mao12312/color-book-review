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

    <script>
    $(function(){
        $('.book').hide().fadeIn(1500);
    
        setTimeout(function(){
            $('.book').fadeOut(1000);
            $('#main').delay(1000).fadeIn(1000);
        },4000);
    });
    </script>

@endsection