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
                <b>{{Lang::get('sunnyfriend.IICName')}}</b>
            </div>
        </div>
    </div>
</div>



<!--法說會-->
<div class="back3 wow fadeInDown" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5 col-xs-12">
                <h3>{{Lang::get('sunnyfriend.IICName')}}<div class="titleline"></div></h3>
                <h4>{{Lang::get('sunnyfriend.IIC-1')}}</h4>
                <p style="text-align: left;">{{Lang::get('sunnyfriend.IIC-2')}}</br>{{Lang::get('sunnyfriend.IIC-3')}}</br>{{Lang::get('sunnyfriend.IIC-4')}}</br>{{Lang::get('sunnyfriend.IIC-5')}}<span>{{Lang::get('sunnyfriend.IIC-6')}}</span>{{Lang::get('sunnyfriend.IIC-7')}}</p>
                <br>
                 <a  class="btn btn-default btn-block" href="https://www.youtube.com/watch?v=O0cxefJvOx8" target="_blank" role="button" style="z-index:999;">{{Lang::get('sunnyfriend.IIC-8')}}</a>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/O0cxefJvOx8" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection