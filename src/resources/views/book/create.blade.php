@extends('layouts.app')

@section('content')
    <body class="home_fill">
    <div class="container-fluid">
        <div class="back_button">
            <a href="product.html">
                <i class='uil uil-arrow-left'></i>
            </a>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 product_show">
                <img src="img/creator1.png" alt="">
                <div class="overlay">
                    <div class="text_area">
                        <h6>漫画</h6>
                        <h3>{{$book->title}}</h3>
                        <h5>作：尾田栄一郎</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 color_palette">
                <div class="row radio-tile-group mb-5">
                    <div class="col-lg-3 input-container">
                        <input id="walk" class="radio-button" type="radio" name="radio" />
                        <div class="radio-tile"
                             style="background: linear-gradient(315deg, rgba(255,150,150,1) 0%, rgba(255,69,69,1) 100%);">
                        </div>
                        <label for="walk" class="radio-tile-label">Red</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="bike" class="radio-button" type="radio" name="radio" />
                        <div class="radio-tile"
                             style="background: linear-gradient(315deg, rgba(255,150,239,1) 0%, rgba(255,69,226,1) 100%);">
                        </div>
                        <label for="bike" class="radio-tile-label">Pink</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="drive" class="radio-button" type="radio" name="radio" />
                        <div class="radio-tile"
                             style="background: linear-gradient(315deg, rgba(198,150,255,1) 0%, rgba(155,69,255,1) 100%);">
                        </div>
                        <label for="drive" class="radio-tile-label">Purple</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="fly" class="radio-button" type="radio" name="radio" />
                        <div class="radio-tile"
                             style="background: linear-gradient(315deg, rgba(150,158,255,1) 0%, rgba(69,90,255,1) 100%);">
                        </div>
                        <label for="fly" class="radio-tile-label">Navy</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="walk" class="radio-button" type="radio" name="radio" />
                        <div class="radio-tile"
                             style="background: linear-gradient(315deg, rgba(150,211,255,1) 0%, rgba(69,183,255,1) 100%);">
                        </div>
                        <label for="walk" class="radio-tile-label">Blue</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="bike" class="radio-button" type="radio" name="radio" />
                        <div class="radio-tile"
                             style="background: linear-gradient(315deg, rgba(150,255,243,1) 0%, rgba(69,255,234,1) 100%);">
                        </div>
                        <label for="bike" class="radio-tile-label">Sky Blue</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="drive" class="radio-button" type="radio" name="radio" />
                        <div class="radio-tile"
                             style="background: linear-gradient(315deg, rgba(150,255,166,1) 0%, rgba(69,255,98,1) 100%);">
                        </div>
                        <label for="drive" class="radio-tile-label">Green</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="fly" class="radio-button" type="radio" name="radio" />
                        <div class="radio-tile"
                             style="background: linear-gradient(315deg, rgba(219,255,150,1) 0%, rgba(191,255,69,1) 100%);">
                        </div>
                        <label for="fly" class="radio-tile-label">Lime</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="walk" class="radio-button" type="radio" name="radio" />
                        <div class="radio-tile"
                             style="background: linear-gradient(315deg, rgba(255,243,150,1) 0%, rgba(255,226,69,1) 100%);">
                        </div>
                        <label for="walk" class="radio-tile-label">Yellow</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="bike" class="radio-button" type="radio" name="radio" />
                        <div class="radio-tile"
                             style="background: linear-gradient(315deg, rgba(255,190,150,1) 0%, rgba(255,133,69,1) 100%);">
                        </div>
                        <label for="bike" class="radio-tile-label">Orange</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="drive" class="radio-button" type="radio" name="radio" />
                        <div class="radio-tile"
                             style="background: linear-gradient(315deg, rgba(85,85,85,1) 0%, rgba(17,17,17,1) 100%);">
                        </div>
                        <label for="drive" class="radio-tile-label">Black</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="fly" class="radio-button" type="radio" name="radio" />
                        <div class="radio-tile"
                             style="background: linear-gradient(315deg, rgba(250,250,250,1) 0%, rgba(240,240,240,1) 100%);">
                        </div>
                        <label for="fly" class="radio-tile-label">White</label>
                    </div>
                </div>
                <button href="#" role="button" data-slide="next" class="arrow_btn w-100 start"
                        onclick="location.href='product_review.html'">
                    レビューする
                    <span><i class='uil uil-angle-right-b'></i></span>
                </button>
            </div>
        </div>
    </div>
    </body>
    {{--<div class="container mt-4" >--}}
        {{--<div class="border p-4" style="background-color: {{$book->average_color}}">--}}
            {{--<h1 class="h5 mb-4">--}}
                {{--色の選択--}}
            {{--</h1>--}}

            {{--<form method="POST" action="/book/create/{{$book->id}}/store">--}}
                {{--@csrf--}}

                {{--<fieldset class="mb-4" >--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="title">--}}
                            {{--{{$book->title}}--}}
                        {{--</label>--}}
                        {{--<br>--}}
                        {{--<select name="color">--}}
                            {{--<option value=" ">-----</option>--}}
                            {{--<option value="#FF4545">Red</option>--}}
                            {{--<option value="#FF45E2">Pink</option>--}}
                            {{--<option value="#9B45FF">Purple</option>--}}
                            {{--<option value="#455AFF">Navy</option>--}}
                            {{--<option value="#45B7FF">Blue</option>--}}
                            {{--<option value="#45FFEA">Sky Blue</option>--}}
                            {{--<option value="#45FF62">Green</option>--}}
                            {{--<option value="#BFFF45">Lime</option>--}}
                            {{--<option value="#FFE245">Yellow</option>--}}
                            {{--<option value="#FF8545">Orange</option>--}}
                            {{--<option value="#111111">Black</option>--}}
                            {{--<option value="#F0F0F0">White</option>--}}
                        {{--</select>--}}

                        {{--<input type="hidden" value="{{$book->id}}" name="book_id">--}}

                    {{--</div>--}}

                    {{--<div class="mt-5">--}}
                        {{--<button type="submit" class="btn btn-primary">--}}
                            {{--投稿する--}}
                        {{--</button>--}}
                    {{--</div>--}}
                {{--</fieldset>--}}
            {{--</form>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection
