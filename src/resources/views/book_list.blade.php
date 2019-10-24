@extends('layouts.app')

@section('content')
    <div class="container mt-4">
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
@endsection