@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="border p-4">
            <h1 class="h5 mb-4">
                色の選択
            </h1>

            <form method="POST" action="/book/create/{{$book->id}}/store">
                @csrf

                <fieldset class="mb-4">
                    <div class="form-group">
                        <label for="title">
                            {{$book->title}}
                        </label>
                        <br>
                        <select name="color">
                            <option value=" ">-----</option>
                            <option value="#FF0000">赤</option>
                            <option value="#0000FF">青</option>
                            <option value="#FFFF00">黄</option>
                            <option value="#00FF00">緑</option>
                            <option value="#CC00FF">紫</option>
                        </select>

                        <input type="hidden" value="{{$book->id}}" name="book_id">
                    </div>

                    <div class="mt-5">
                        <button type="submit" class="btn btn-primary">
                            投稿する
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
