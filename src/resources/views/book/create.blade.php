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
                <img src="{{asset('Author_img/creator1.png')}}" alt="">
                <div class="overlay">
                    <div class="text_area">
                        <h6>漫画</h6>
                        <h3>ONE PIECE</h3>
                        <h5>作：尾田栄一郎</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 color_palette">
                <div class="row radio-tile-group mb-5">
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
                        <input id="fly" class="radio-button white" type="radio" name="color" value="#F0F0F0"/>
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

    <script>
        $('[name=color]').change(function() {
            var color = $('[name=color]').val();
            console.log(color)
            $(".color").css("background-color", color);
        });

        $(function() {
            $('input[type="radio"]').change(function() {
                var color = $(this).val();
                $(".color").css("background-color", color);
            });
        });
    </script>
@endsection
