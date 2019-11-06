@extends('layouts.app')

@section('content')
    <body class="home_fill">
    <div class="container-fluid">
        <div class="back_button">
            <a href="{{url('/book_list')}}">
                <i class='uil uil-arrow-left'></i>
            </a>
        </div>
        <button class="switch_button" style="bottom: 65px;right: 65px;
        position: fixed;
        z-index: 3;
        width: 60px;
opacity: 0.05"><i class='uil uil-cog '></i></button>
        <div class="row align-items-center">
            <div class="col-lg-6 product_show">
                <img src="{{asset('Author_img/creator1.png')}}" alt="">
                <div class="overlay">
                    <div class="text_area">
                        <h6>{{$book->category}}</h6>
                        <h3>{{$book->title}}</h3>
                        <h5>作：{{$book->author}}</h5>
                    </div>
                </div>
            </div>

            <form class="col-lg-6 color_palette" method="POST" action="/book/create/{{$book->id}}/store">
                @csrf
                <input type="hidden" value="{{$book->id}}" name="book_id">
                {{--color-12--}}
                <div class="row radio-tile-group mb-5 color-12">
                    <div class="col-lg-3 input-container">
                        <input id="walk" class="radio-button red" type="radio" name="color" value="#FF4545"/>
                        <div class="radio-tile"
                             style="background: linear-gradient(315deg, rgba(255,150,150,1) 0%, rgba(255,69,69,1) 100%);">
                        </div>
                        <label for="walk" class="radio-tile-label">Red</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="bike" class="radio-button pink" type="radio" name="color" value="#FF45E2"/>
                        <div class="radio-tile"
                             style="background: linear-gradient(315deg, rgba(255,150,239,1) 0%, rgba(255,69,226,1) 100%);">
                        </div>
                        <label for="bike" class="radio-tile-label">Pink</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="drive" class="radio-button purple" type="radio" name="color" value="#9B45FF"/>
                        <div class="radio-tile"
                             style="background: linear-gradient(315deg, rgba(198,150,255,1) 0%, rgba(155,69,255,1) 100%);">
                        </div>
                        <label for="drive" class="radio-tile-label">Purple</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="fly" class="radio-button navy" type="radio" name="color" value="#455AFF"/>
                        <div class="radio-tile"
                             style="background: linear-gradient(315deg, rgba(150,158,255,1) 0%, rgba(69,90,255,1) 100%);">
                        </div>
                        <label for="fly" class="radio-tile-label">Navy</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="walk" class="radio-button blue" type="radio" name="color" value="#45B7FF"/>
                        <div class="radio-tile"
                             style="background: linear-gradient(315deg, rgba(150,211,255,1) 0%, rgba(69,183,255,1) 100%);">
                        </div>
                        <label for="walk" class="radio-tile-label">Blue</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="bike" class="radio-button skyBlue" type="radio" name="color" value="#45FFEA"/>
                        <div class="radio-tile"
                             style="background: linear-gradient(315deg, rgba(150,255,243,1) 0%, rgba(69,255,234,1) 100%);">
                        </div>
                        <label for="bike" class="radio-tile-label">Sky Blue</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="drive" class="radio-button green" type="radio" name="color" value="#45FF62"/>
                        <div class="radio-tile"
                             style="background: linear-gradient(315deg, rgba(150,255,166,1) 0%, rgba(69,255,98,1) 100%);">
                        </div>
                        <label for="drive" class="radio-tile-label">Green</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="fly" class="radio-button lime" type="radio" name="color" value="#BFFF45"/>
                        <div class="radio-tile"
                             style="background: linear-gradient(315deg, rgba(219,255,150,1) 0%, rgba(191,255,69,1) 100%);">
                        </div>
                        <label for="fly" class="radio-tile-label">Lime</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="walk" class="radio-button yellow" type="radio" name="color" value="#FFE245"/>
                        <div class="radio-tile"
                             style="background: linear-gradient(315deg, rgba(255,243,150,1) 0%, rgba(255,226,69,1) 100%);">
                        </div>
                        <label for="walk" class="radio-tile-label">Yellow</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="bike" class="radio-button orange" type="radio" name="color" value="#FF8545"/>
                        <div class="radio-tile"
                             style="background: linear-gradient(315deg, rgba(255,190,150,1) 0%, rgba(255,133,69,1) 100%);">
                        </div>
                        <label for="bike" class="radio-tile-label">Orange</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="drive" class="radio-button black" type="radio" name="color" value="#111111"/>
                        <div class="radio-tile"
                             style="background: linear-gradient(315deg, rgba(85,85,85,1) 0%, rgba(17,17,17,1) 100%);">
                        </div>
                        <label for="drive" class="radio-tile-label">Black</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="fly" class="radio-button white" type="radio" name="color" value="#f0f0f0"/>
                        <div class="radio-tile"
                             style="background: linear-gradient(315deg, rgba(250,250,250,1) 0%, rgba(240,240,240,1) 100%);">
                        </div>
                        <label for="fly" class="radio-tile-label">White</label>
                    </div>
                </div>

                {{--color-24--}}
                <div class="row radio-tile-group mb-5 color-24">
                    <div class="col-lg-3 input-container">
                        <input id="walk" class="radio-button" type="radio" name="color" value="#723132"/>
                        <div class="radio-tile"
                             style="background: #723132;">
                        </div>
                        <label for="walk" class="radio-tile-label">Dark brown</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="bike" class="radio-button" type="radio" name="color" value="#BF4638"/>
                        <div class="radio-tile"
                             style="background: #BF4638;">
                        </div>
                        <label for="bike" class="radio-tile-label">Brown</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="drive" class="radio-button" type="radio" name="color" value="#F03133"/>
                        <div class="radio-tile"
                             style="background: #F03133;">
                        </div>
                        <label for="drive" class="radio-tile-label">Red</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="fly" class="radio-button" type="radio" name="color" value="#F1742E"/>
                        <div class="radio-tile"
                             style="background: #F1742E;">
                        </div>
                        <label for="fly" class="radio-tile-label">Vermilion</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="walk" class="radio-button" type="radio" name="color" value="#EEA82D"/>
                        <div class="radio-tile"
                             style="background: #EEA82D;">
                        </div>
                        <label for="walk" class="radio-tile-label">Orange</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="bike" class="radio-button" type="radio" name="color" value="#E4C71A"/>
                        <div class="radio-tile"
                             style="background: #E4C71A;">
                        </div>
                        <label for="bike" class="radio-tile-label">Tangerine</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="drive" class="radio-button" type="radio" name="color" value="#EFCE8A"/>
                        <div class="radio-tile"
                             style="background: #EFCE8A;">
                        </div>
                        <label for="drive" class="radio-tile-label">Beige</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="fly" class="radio-button" type="radio" name="color" value="#EEF419"/>
                        <div class="radio-tile"
                             style="background: #EEF419;">
                        </div>
                        <label for="fly" class="radio-tile-label">Lemon</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="walk" class="radio-button" type="radio" name="color" value="#DFDA20"/>
                        <div class="radio-tile"
                             style="background: #DFDA20;">
                        </div>
                        <label for="walk" class="radio-tile-label">Yellow</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="bike" class="radio-button" type="radio" name="color" value="#B6A124"/>
                        <div class="radio-tile"
                             style="background: #B6A124;">
                        </div>
                        <label for="bike" class="radio-tile-label">Ocher</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="drive" class="radio-button" type="radio" name="color" value="#8ABC3A"/>
                        <div class="radio-tile"
                             style="background: #8ABC3A;">
                        </div>
                        <label for="drive" class="radio-tile-label">Yellow green</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="fly" class="radio-button" type="radio" name="color" value="#3EAB61"/>
                        <div class="radio-tile"
                             style="background: #3EAB61;">
                        </div>
                        <label for="fly" class="radio-tile-label">Green</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="walk" class="radio-button" type="radio" name="color" value="#3E7D3A"/>
                        <div class="radio-tile"
                             style="background: #3E7D3A;">
                        </div>
                        <label for="walk" class="radio-tile-label">Dark green</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="bike" class="radio-button" type="radio" name="color" value="#3D9BE9"/>
                        <div class="radio-tile"
                             style="background: #3D9BE9;">
                        </div>
                        <label for="bike" class="radio-tile-label">Light blue</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="drive" class="radio-button" type="radio" name="color" value="#3871C3"/>
                        <div class="radio-tile"
                             style="background: #3871C3;">
                        </div>
                        <label for="drive" class="radio-tile-label">Blue</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="fly" class="radio-button" type="radio" name="color" value="#275798"/>
                        <div class="radio-tile"
                             style="background: #275798;">
                        </div>
                        <label for="fly" class="radio-tile-label">Indigo</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="walk" class="radio-button" type="radio" name="color" value="#38319A"/>
                        <div class="radio-tile"
                             style="background: #38319A;">
                        </div>
                        <label for="walk" class="radio-tile-label">Ultramarine</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="bike" class="radio-button" type="radio" name="color" value="#8B52A1"/>
                        <div class="radio-tile"
                             style="background: #8B52A1;">
                        </div>
                        <label for="bike" class="radio-tile-label">Purple</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="drive" class="radio-button" type="radio" name="color" value="#CE3D9C"/>
                        <div class="radio-tile"
                             style="background: #CE3D9C;">
                        </div>
                        <label for="drive" class="radio-tile-label">Magenta</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="fly" class="radio-button" type="radio" name="color" value="#F2A1C2"/>
                        <div class="radio-tile"
                             style="background: #F2A1C2;">
                        </div>
                        <label for="fly" class="radio-tile-label">Pink</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="walk" class="radio-button" type="radio" name="color" value="#AF8C3C"/>
                        <div class="radio-tile"
                             style="background: #AF8C3C;">
                        </div>
                        <label for="walk" class="radio-tile-label">Decayed leaf color</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="bike" class="radio-button" type="radio" name="color" value="#BDB7BD"/>
                        <div class="radio-tile"
                             style="background: #BDB7BD;">
                        </div>
                        <label for="bike" class="radio-tile-label">Gray</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="drive" class="radio-button" type="radio" name="color" value="#000E00"/>
                        <div class="radio-tile"
                             style="background: #000E00;">
                        </div>
                        <label for="drive" class="radio-tile-label">Black</label>
                    </div>

                    <div class="col-lg-3 input-container">
                        <input id="fly" class="radio-button" type="radio" name="color" value="#f0f0f0"/>
                        <div class="radio-tile"
                             style="background: #f0f0f0;">
                        </div>
                        <label for="fly" class="radio-tile-label">White</label>
                    </div>
                </div>
                <button type="submit" role="button" data-slide="next" class="arrow_btn w-100 start"
                        onclick="location.href='/book/result/{{$book->id}}'">
                    レビューする
                    <span><i class='uil uil-angle-right-b'></i></span>
                </button>
            </form>
        </div>
    </div>
    </body>

    <script>
        $(function() {
            $('input[type="radio"]').change(function() {
                var color = $(this).val();
                $(".overlay").css("background", color);
            });
        });
        $(function(){   
            $('body').addClass('animated fadeIn');
            $('a').on('click',function(){
                $('body').addClass('animated fadeOut');
            });
            $('.start').on('click',function(){
                $('body').addClass('animated fadeOut');
            });
        });

        $(document).ready(function () {

            $('.color-12').show();
            $('.color-24').hide();

            $('.switch_button').click(function () {

                $('.home_fill').toggleClass('switch');

                if ($('.home_fill').hasClass('switch')) {
                    $('.color-12').hide();
                    $('.color-24').show();
                } else {
                    $('.color-12').show();
                    $('.color-24').hide();
                }
            });
        });
    </script>
@endsection
