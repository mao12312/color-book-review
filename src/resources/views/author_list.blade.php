@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        @foreach ($author_lists as $author_list)
            <div class="card mb-4">
                <div class="card-header">
                    {{ $author_list->author }}
                </div>
                <div class="card-body">
                    <p class="card-text">
                        name
                    </p>
                    <a class="card-link" href="/author/create/{{$author_list->id}}">
                        詳細
                    </a>
                </div>
                <div class="card-footer">
                    <span class="mr-2">
                        投稿日時 {{ $author_list->created_at->format('Y.m.d') }}
                    </span>
                </div>
            </div>
        @endforeach
    </div>
@endsection