@extends('Layouts/app')

@section('content')
    <!--banner-->
    <div class="bannerArea b-box  wow fadeInDown" data-wow-delay="0.5s ">
        <img class="img-responsive" src="../assets/images/about/about_banner.jpg">
        <div class="titleBox clearfix">
            <h2>{{Lang::get('sunnyfriend.AboutSF')}}</h2>
        </div>
    </div>
    <div class="wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="breads">
                    <a href="../index.php">{{Lang::get('sunnyfriend.Home')}}</a>
                    <span>></span>
                    <span>{{Lang::get('sunnyfriend.AboutSF')}}</span>
                    <span>></span>
                    <b>{{Lang::get('sunnyfriend.ServiceandArea')}}</b>
                </div>
            </div>
        </div>
    </div>
    <!--營業項目與範圍-->
    <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>{{Lang::get('sunnyfriend.ServiceandArea')}}<div class="titleline"></div></h3>
                </div>
            </div>
            <div class="row">
                <div class="back1992">
                    <div class="col-md-6 col-sm-12 col-md-push-6">
                        <img alt="Brand" class="img-responsive center-block" src="../assets/images/about/BusinessItems.png">
                    </div>
                    <div class="col-md-3 col-sm-6 col-md-pull-6">
                        <img class="img-responsive center-block back1991" src="../assets/images/house-01.svg">
                        <div class="about-text text-center">
                            <h4>{{Lang::get('sunnyfriend.ServiceandArea-1')}}</h4>
                            <p>{{Lang::get('sunnyfriend.ServiceandArea-2')}}</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-md-pull-6">
                        <img class="img-responsive center-block back1991" src="../assets/images/about/Goldbal-01.svg">
                        <div class="about-text text-center">
                            <h4>{{Lang::get('sunnyfriend.ServiceandArea-3')}}</h4>
                            <p>{{Lang::get('sunnyfriend.ServiceandArea-4')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection