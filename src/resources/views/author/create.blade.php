@extends('layouts.app')

@section('content')
    <div class="container mt-4" >
        <div class="border p-4" style="background-color: {{$author->average_color}}">
            <h1 class="h5 mb-4">
                色の選択
            </h1>

            <form method="POST" action="/author/create/{{$author->id}}/store">
                @csrf

                <fieldset class="mb-4" >
                    <div class="form-group">
                        <label for="title">
                            {{$author->author}}
                        </label>
                        <br>
                        <select name="color">
                            <option value=" ">-----</option>
                            <option value="#FF4545">Red</option>
                            <option value="#FF45E2">Pink</option>
                            <option value="#9B45FF">Purple</option>
                            <option value="#455AFF">Navy</option>
                            <option value="#45B7FF">Blue</option>
                            <option value="#45FFEA">Sky Blue</option>
                            <option value="#45FF62">Green</option>
                            <option value="#BFFF45">Lime</option>
                            <option value="#FFE245">Yellow</option>
                            <option value="#FF8545">Orange</option>
                            <option value="#111111">Black</option>
                            <option value="#F0F0F0">White</option>
                        </select>

                        <input type="hidden" value="{{$author->id}}" name="author_id">

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