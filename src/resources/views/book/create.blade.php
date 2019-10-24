@extends('layouts.app')

@section('content')
    <div class="container mt-4" >
        <div class="border p-4 color" style="background-color: {{$book->average_color}}">
            <h1 class="h5 mb-4">
                色の選択
            </h1>

            <form method="POST" action="/book/create/{{$book->id}}/store">
                @csrf

                <fieldset class="mb-4" >
                    <div class="form-group">
                        <label for="title">
                            {{$book->title}}
                        </label>
                        <br>
                        <select name="color">
                            <option value=" ">-----</option>
                            <option class="red" value="#FF4545">Red</option>
                            <option class="pink" value="#FF45E2">Pink</option>
                            <option class="purple" value="#9B45FF">Purple</option>
                            <option class="navy" value="#455AFF">Navy</option>
                            <option class="blue" value="#45B7FF">Blue</option>
                            <option class="skyBlue" value="#45FFEA">Sky Blue</option>
                            <option class="green" value="#45FF62">Green</option>
                            <option class="lime" value="#BFFF45">Lime</option>
                            <option class="yellow" value="#FFE245">Yellow</option>
                            <option class="orange" value="#FF8545">Orange</option>
                            <option class="black" value="#111111">Black</option>
                            <option class="white" value="#F0F0F0">White</option>
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

    <script>
        $('[name=color]').change(function() {
            var color = $('[name=color]').val();
            console.log(color)
            $(".color").css("background-color", color);
        });
    </script>
@endsection
