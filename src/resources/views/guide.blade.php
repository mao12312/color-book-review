@extends('layouts.app')

@section('content')
    <body class="home_fill">
    <div class="app">
        <div class="container-fluid">
            <div id="carouselExampleIndicators" class="carousel slide" data-interval="false" data-ride="carousel"
                 data-pause="hover">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-ride="true">
                        <div class="row align-items-center">
                            <div class="col-lg-5 carousel-text">
                                <h1>お気に入りの本を<br>
                                    “色”でレビューする<br>
                                    新たな体験。</h1>
                                <p>本や作家を「色」でデビューしていくこと・・・<br>最初は意味のないコトに見えるかも知れない。でも、<br>人の知識体系というのは、思っているよりも複雑だ。</p>
                                <a href="#carouselExampleIndicators" role="button" data-slide="next" class="arrow_btn">
                                    Next
                                    <span><i class='uil uil-angle-right-b'></i></span>
                                </a>
                                <img src="img/Colorful.svg" alt="" class="sub_h1">
                            </div>
                            <div class="col-lg-7 carousel-img">
                                <img src="img/guide_img1.svg" class="d-block" alt="...">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-ride="true">
                        <div class="row align-items-center">
                            <div class="col-lg-7 carousel-img">
                                <img src="img/guide_img2.svg" class="d-block img_left" alt="...">
                            </div>
                            <div class="col-lg-5 carousel-text">
                                <h1>コンテンツを<br>
                                    選択して<br>
                                    “色”を決めるだけ</h1>
                                <p>プロダクト、もしくはクリエイターを選択してその対象か<br>ら思い描く色をイメージして、12色から1色を決めるだけ。<br>文字ではないので、詳しい感情を伝えることはできない。
                                </p>
                                <a href="#carouselExampleIndicators" role="button" data-slide="next" class="arrow_btn">
                                    Next
                                    <span><i class='uil uil-angle-right-b'></i></span>
                                </a>
                                <img src="img/Colorful.svg" alt="" class="sub_h1 right">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-ride="true">
                        <div class="row align-items-center">
                            <div class="col-lg-5 carousel-text">
                                <h1>読書の<br>
                                    わくわくに<br>
                                    新しいスタンダードを。</h1>
                                <p><span>“本の共感覚化としての⾊覚化” </span><br>千年後、この⺠主的な『COLOR BOOK REVIEW』は当たり前<br>のように読者の判断基準の1つになっているのかも知れない。
                                </p>
                                <a href="#" role="button" data-slide="next" class="arrow_btn start" id="start">
                                    START
                                    <span><i class='uil uil-angle-right-b'></i></span>
                                </a>
                                <img src="img/Colorful.svg" alt="" class="sub_h1">
                            </div>
                            <div class="col-lg-7 carousel-img">
                                <img src="img/guide_img3.svg" class="d-block" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="book" style="display: none;">
        <div class="book__page"></div>
        <div class="book__page"></div>
        <div class="book__page"></div>
    </div>

    <div class="typewrite" style="display: none;">
        <h1 class="line-1 anim-typewriter">Color Book Review</h1>
        <div class="loading3" style="display: none;">
            <h3 class="line-1" enter-class="animated fadeIn delay">“本”という文字情報を”色”という別の情報でレビューする</h3>
            <p>本の共感覚化としての⾊覚化
                全く新しい情報だが、これが百年千年と続けば、
                リテラシーは、後から追い付いてくるのではないか
                千年後、この⺠主的な『COLOR BOOK REVIEW』は当たり前のように
                読者の判断基準の⼀つになっているかも知れない</p>
        </div>
    </div>
    </body>
    <script>
        $("#start").on('click',function(event){
            event.preventDefault();
            
            // var linkUrl = $(this).attr('href');
            $('#carouselExampleIndicators').fadeOut(1000);
            $('.book').hide().delay(1000).fadeIn(1500);
            
            setTimeout(function(){
                $('.book').fadeOut(1000);
                $('.typewrite').fadeIn(1000);
                setTimeout(function(){
                    $('.loading3').fadeIn(1000);
                },4000);
            },5000);
            setTimeout(function(){
                $('.typewrite').fadeOut(1000);
            },12000);

            setTimeout(function() {
                window.location.href = '/author_list';
            }, 12000);
        });
    </script>
@endsection