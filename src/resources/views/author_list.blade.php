@extends('layouts.app')

@section('content')
    <main>
        @include('partials.header')
        <div class="main">
            <div class="title">
                <h2>CREATOR<span>作家・クリエイター</span></h2>
                <p>好きなクリエイターを選択してください。</p>
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
{{--                                <span><i class='uil uil-comment-alt-notes'></i>  {{$review_counts[($author_list->id)-1]}}review</span>--}}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
    <script>
        $(function(){   
            $('main').addClass('animated fadeIn');
            $('a').on('click',function(){
                $('main').addClass('animated fadeOut');
            });
        });
    </script>
@endsection