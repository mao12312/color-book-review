@extends('layouts.app')


@section('content')
    <div id="load">
        <example-component></example-component>
    </div>

    <div class="container mt-4" id="app" v-show="@{{ !loading && !loading2 }}">
        @foreach ($book_lists as $book_list)
            <div class="card mb-4">
                <div class="card-header">
                    {{ $book_list->title }}
                </div>
                <div class="card-body">
                    <p class="card-text">
                       本
                    </p>
                    <a class="card-link" href="/book/create/{{$book_list->id}}">
                        詳細
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
{{-- <script>
    var move = new Vue ({
        // delimiters: ["(%","%)"] ,
        el: "#app",
        data() {
            return{
                done: false,
            }
        },
        mounted() {
            setTimeout(() => {
                this.load = true;
            },12000);
        }
    })
</script> --}}
<script src="js/app.js"></script>
<script src="js/main.js"></script>
@endsection

