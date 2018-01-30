@extends('Layouts/app')

@section('content')
    <!--banner-->
    <div class="bannerArea b-box  wow fadeInDown" data-wow-delay="0.5s ">
        <img class="img-responsive" src="../assets/images/news/new_banner.jpg">
        <div class="titleBox clearfix">
            <h2>{{Lang::get('sunnyfriend.Investor')}}</h2>
        </div>
    </div>
    <div class="wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="breads">
                    <a href="../index.php">{{Lang::get('sunnyfriend.Home')}}</a>
                    <span>></span>
                    <span>{{Lang::get('sunnyfriend.Investor')}}</span>
                    <span>></span>
                    <b>{{Lang::get('sunnyfriend.InvestmentCentre')}}</b>
                </div>
            </div>
        </div>
    </div>
    <!--重大消息-->
    <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <h3>{{Lang::get('sunnyfriend.InvestmentCentre')}}<div class="titleline"></div></h3>
                    <div class="contentbox">
                        <h4>{{Lang::get('sunnyfriend.InvestmentCentre-1')}}</h4>
                        <p>{{Lang::get('sunnyfriend.InvestmentCentre-2')}}</br>{{Lang::get('sunnyfriend.InvestmentCentre-3')}}</br>{{Lang::get('sunnyfriend.InvestmentCentre-4')}}</p>
                        </br>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-md-offset-2">
                    <h3>{{Lang::get('sunnyfriend.InvestmentCentre-5')}}<div class="titleline"></div></h3>
                    <div class="contentbox">
                        <h4>{{Lang::get('sunnyfriend.InvestmentCentre-6')}}</h4>
                        <p>{{Lang::get('sunnyfriend.InvestmentCentre-7')}}</br>{{Lang::get('sunnyfriend.InvestmentCentre-8')}}</p>
                        </br>
                    </div>
                    <div class="contentbox">
                        <h4>{{Lang::get('sunnyfriend.InvestmentCentre-9')}}</h4>
                        <p>{{Lang::get('sunnyfriend.InvestmentCentre-10')}}</br>{{Lang::get('sunnyfriend.InvestmentCentre-11')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection