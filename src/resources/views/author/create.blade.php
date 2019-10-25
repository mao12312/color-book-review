@extends('layouts.app')

@section('content')
    <div class="container mt-4" >
        <div class="border p-4 color" style="background-color: {{$author->average_color}}">
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
                        {{-- <select name="color">
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
                        </select> --}}

                        {{-- <input type="radio" name="color" value="#FF4545" class="red">red
                        <input type="radio" name="color" value="#FF45E2" class="pink">pink
                        <input type="radio" name="color" value="#9B45FF" class="purple">Purple
                        <input type="radio" name="color" value="#455AFF" class="navy">navy --}}


                        <div class="col-lg-6 color_palette">
                            <div class="row radio-tile-group">
                                <div class="col-lg-3 input-container">
                                    <input id="walk" class="radio-button red" type="radio" name="color" value="#FF4545" />
                                    <div class="radio-tile"
                                        style="background: linear-gradient(315deg, rgba(255,150,150,1) 0%, rgba(255,69,69,1) 100%);">
                                    </div>
                                    <label for="walk" class="radio-tile-label">Red</label>
                                </div>
            
                                <div class="col-lg-3 input-container">
                                    <input id="bike" class="radio-button pink" type="radio" name="color" value="#FF45E2" />
                                    <div class="radio-tile"
                                        style="background: linear-gradient(315deg, rgba(255,150,239,1) 0%, rgba(255,69,226,1) 100%);">
                                    </div>
                                    <label for="bike" class="radio-tile-label">Pink</label>
                                </div>
            
                                <div class="col-lg-3 input-container">
                                    <input id="drive" class="radio-button purple" type="radio" name="color" value="#9B45FF" />
                                    <div class="radio-tile"
                                        style="background: linear-gradient(315deg, rgba(198,150,255,1) 0%, rgba(155,69,255,1) 100%);">
                                    </div>
                                    <label for="drive" class="radio-tile-label">Purple</label>
                                </div>
            
                                <div class="col-lg-3 input-container">
                                    <input id="fly" class="radio-button navy" type="radio" name="color" value="#455AFF" />
                                    <div class="radio-tile"
                                        style="background: linear-gradient(315deg, rgba(150,158,255,1) 0%, rgba(69,90,255,1) 100%);">
                                    </div>
                                    <label for="fly" class="radio-tile-label">Navy</label>
                                </div>
            
                                <div class="col-lg-3 input-container">
                                    <input id="walk" class="radio-button blue" type="radio" name="color" value="#45B7FF" />
                                    <div class="radio-tile"
                                        style="background: linear-gradient(315deg, rgba(150,211,255,1) 0%, rgba(69,183,255,1) 100%);">
                                    </div>
                                    <label for="walk" class="radio-tile-label">Blue</label>
                                </div>

                                <div class="col-lg-3 input-container">
                                    <input id="bike" class="radio-button skyBlue" type="radio" name="color" value="#45FFEA" />
                                    <div class="radio-tile"
                                        style="background: linear-gradient(315deg, rgba(150,255,243,1) 0%, rgba(69,255,234,1) 100%);">
                                    </div>
                                    <label for="bike" class="radio-tile-label">Sky Blue</label>
                                </div>
            
                                <div class="col-lg-3 input-container">
                                    <input id="drive" class="radio-button green" type="radio" name="color" value="#45FF62" />
                                    <div class="radio-tile"
                                        style="background: linear-gradient(315deg, rgba(150,255,166,1) 0%, rgba(69,255,98,1) 100%);">
                                    </div>
                                    <label for="drive" class="radio-tile-label">Green</label>
                                </div>
            
                                <div class="col-lg-3 input-container">
                                    <input id="fly" class="radio-button lime" type="radio" name="color" value="#BFFF45" />
                                    <div class="radio-tile"
                                        style="background: linear-gradient(315deg, rgba(219,255,150,1) 0%, rgba(191,255,69,1) 100%);">
                                    </div>
                                    <label for="fly" class="radio-tile-label">Lime</label>
                                </div>
            
                                <div class="col-lg-3 input-container">
                                    <input id="walk" class="radio-button yellow" type="radio" name="color" value="#FFE245" />
                                    <div class="radio-tile"
                                        style="background: linear-gradient(315deg, rgba(255,243,150,1) 0%, rgba(255,226,69,1) 100%);">
                                    </div>
                                    <label for="walk" class="radio-tile-label">Yellow</label>
                                </div>
            
                                <div class="col-lg-3 input-container">
                                    <input id="bike" class="radio-button orange" type="radio" name="color" value="#FF8545" />
                                    <div class="radio-tile"
                                        style="background: linear-gradient(315deg, rgba(255,190,150,1) 0%, rgba(255,133,69,1) 100%);">
                                    </div>
                                    <label for="bike" class="radio-tile-label">Orange</label>
                                </div>

                                <div class="col-lg-3 input-container">
                                    <input id="drive" class="radio-button black" type="radio" name="color" value="#111111" />
                                    <div class="radio-tile"
                                        style="background: linear-gradient(315deg, rgba(85,85,85,1) 0%, rgba(17,17,17,1) 100%);">
                                    </div>
                                    <label for="drive" class="radio-tile-label">Black</label>
                                </div>
            
                                <div class="col-lg-3 input-container">
                                    <input id="fly" class="radio-button white" type="radio" name="color" value="#F0F0F0" />
                                    <div class="radio-tile"
                                        style="background: linear-gradient(315deg, rgba(250,250,250,1) 0%, rgba(240,240,240,1) 100%);">
                                    </div>
                                    <label for="fly" class="radio-tile-label">White</label>
                                </div>
                            </div>
                    
                    

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

    <script>
        // $('[name=color]').change(function() {
        //     var color = $('[name=color]').val();
        //     $(".color").css("background-color", color);
        // });

        $(function() {
            //ラジオボタンをチェックしたら発動
            $('input[type="radio"]').change(function() {
                //選択したvalue値を変数に格納
                var color = $(this).val();
                //選択したvalue値をp要素に出力
                $(".color").css("background-color", color);
            });
        });
    </script>
@endsection