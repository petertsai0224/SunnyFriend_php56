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
                    <b>{{Lang::get('sunnyfriend.DividendPolicy')}}</b>
                </div>
            </div>
        </div>
    </div>
    <!--股利資訊-公開資訊觀測站-->
    <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <h3>{{Lang::get('sunnyfriend.DividendPolicy-1')}}<div class="titleline"></div></h3>
                    <p>{{Lang::get('sunnyfriend.DividendPolicy-2')}}</br>
                    </br>
                </br>
            </p>
            <h4>{{Lang::get('sunnyfriend.DividendPolicy-3')}}<span>{{Lang::get('sunnyfriend.DividendPolicy-4')}}</span>{{Lang::get('sunnyfriend.DividendPolicy-5')}}</h4>
            <a target="_blank" class="btn btn-default btn-block" href="http://mops.twse.com.tw/mops/web/t146sb05" role="button" style="z-index:999;">{{Lang::get('sunnyfriend.DividendPolicy-6')}}</a>
        </div>
        <div class="col-md-8 col-sm-6">
            <img class="img-responsive" src="../assets/images/Investor/query.jpg">
        </div>
    </div>
    </div>
    </div>
@endsection