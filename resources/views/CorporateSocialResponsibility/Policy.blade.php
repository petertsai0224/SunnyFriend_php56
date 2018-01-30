@extends('Layouts/app')

@section('content')
    <!--banner-->
    <div class="bannerArea b-box  wow fadeInDown" data-wow-delay="0.5s ">
        <img class="img-responsive" src="../assets/images/CorporateSocialResponsibility/CSR_banner.jpg">
        <div class="titleBox clearfix">
            <h2>{{Lang::get('sunnyfriend.CorporateSocialResponsibility')}}</h2>
        </div>
    </div>
    <div class="wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="breads">
                    <a href="../index.php">{{Lang::get('sunnyfriend.Home')}}</a>
                    <span>></span>
                    <span>{{Lang::get('sunnyfriend.CorporateSocialResponsibility')}}</span>
                    <span>></span>
                    <b>{{Lang::get('sunnyfriend.Policy')}}</b>
                </div>
            </div>
        </div>
    </div>
    <!--導言-->
    <div class="backCSR1 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                <h3>{{Lang::get('sunnyfriend.Policy')}}<div class="titleline"></div></h3>
                    <p>{{Lang::get('sunnyfriend.Policy-1')}}
                    </p>
                    <h5 style="color:#009943">{{Lang::get('sunnyfriend.Policy-2')}}</br>{{Lang::get('sunnyfriend.Policy-3')}}</br>{{Lang::get('sunnyfriend.Policy-4')}}</br>{{Lang::get('sunnyfriend.Policy-5')}}</br>{{Lang::get('sunnyfriend.Policy-6')}}</h5>
                </div>
                <div class="col-md-6 col-sm-6">
                    <img class="img-responsive" src="../assets/images/CorporateSocialResponsibility/SFCSR/1.jpg">
                </div>
            </div>
        </div>
    </div>
    <!--相片輪播-->
    <div id="news" class="backCSR2 back02 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div id="owl-two" class="owl-theme owl-carousel">
                    <div class="item">
                        <div class="ih-item square effect14 csrshadow">
                            <img class="img-responsive img" src="../assets/images/CorporateSocialResponsibility/SFCSR/Carousel/030-1.jpg">
                        </div>
                        <p>{{Lang::get('sunnyfriend.Policy-7')}}</p>
                    </div>
                    <div class="item">
                        <div class="ih-item square effect14 csrshadow">
                            <img class="img-responsive img" src="../assets/images/CorporateSocialResponsibility/SFCSR/Carousel/031-1.jpg">
                        </div>
                        <p>{{Lang::get('sunnyfriend.Policy-8')}}</p>
                    </div>
                    <div class="item">
                        <div class="ih-item square effect14 csrshadow">
                            <img class="img-responsive img" src="../assets/images/CorporateSocialResponsibility/SFCSR/Carousel/030-3.jpg">
                        </div>
                        <p>{{Lang::get('sunnyfriend.Policy-9')}}</p>
                    </div>
                    <div class="item">
                        <div class="ih-item square  effect14 csrshadow">
                            <img class="img-responsive img" src="../assets/images/CorporateSocialResponsibility/SFCSR/Carousel/034.jpg">
                        </div>
                        <p>{{Lang::get('sunnyfriend.Policy-10')}}</p>
                    </div>
                    <div class="item">
                        <div class="ih-item square effect14 csrshadow">
                            <img class="img-responsive img" src="../assets/images/CorporateSocialResponsibility/SFCSR/Carousel/030-2.jpg">
                        </div>
                        <p>{{Lang::get('sunnyfriend.Policy-11')}}</p>
                    </div>
                    <div class="item">
                        <div class="ih-item square  effect14 csrshadow">
                            <img class="img-responsive img" src="../assets/images/CorporateSocialResponsibility/SFCSR/Carousel/032.jpg">
                        </div>
                        <p>{{Lang::get('sunnyfriend.Policy-12')}}</p>
                    </div>
                    <div class="item">
                        <div class="ih-item square  effect14 csrshadow">
                            <img class="img-responsive img" src="../assets/images/CorporateSocialResponsibility/SFCSR/Carousel/033.jpg">
                        </div>
                        <p>{{Lang::get('sunnyfriend.Policy-13')}}</p>
                    </div>
                    <div class="item">
                        <div class="ih-item square  effect14 csrshadow">
                            <img class="img-responsive img" src="../assets/images/CorporateSocialResponsibility/SFCSR/Carousel/030-4.jpg">
                        </div>
                        <p>{{Lang::get('sunnyfriend.Policy-14')}}</p>
                    </div>
                    <div class="item">
                        <div class="ih-item square  effect14 csrshadow">
                            <img class="img-responsive img" src="../assets/images/CorporateSocialResponsibility/SFCSR/Carousel/035C.jpg">
                        </div>
                        <p>{{Lang::get('sunnyfriend.Policy-15')}}</p>
                    </div>
                </div>
                <script>
                $(document).ready(function() {
                    var owl = $('#owl-two');
                    owl.owlCarousel({
                        margin: 30,
                        top: 90,
                        nav: true,
                        loop: true,
                        dots: true,
                        responsive: {
                            0: {
                                items: 1
                            },
                            600: {
                                items: 3
                            },
                            1000: {
                                items: 3
                            }
                        }
                    })
                })
                </script>
            </div>
        </div>
    </div>
@endsection