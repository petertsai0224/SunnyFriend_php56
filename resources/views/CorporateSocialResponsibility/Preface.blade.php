@extends('Layouts/app')

@section('content')
    <!--banner-->
    <div class="bannerArea b-box  wow fadeInDown" data-wow-delay="0.5s ">
        <img class="img-responsive" src="../resources/assets/images/CorporateSocialResponsibility/CSR_banner.jpg">
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
                    <b>{{Lang::get('sunnyfriend.Preface')}}</b>
                </div>
            </div>
        </div>
    </div>
    <!--導言-->
   <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <h3>{{Lang::get('sunnyfriend.Preface')}}<div class="titleline"></div></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <p>{{Lang::get('sunnyfriend.Preface-1')}}</br>
                        </br>
                    </p>
                    <h5 style="color:#009943">◆&nbsp;{{Lang::get('sunnyfriend.Preface-2')}}</br>◆&nbsp;{{Lang::get('sunnyfriend.Preface-3')}}</br>◆&nbsp;{{Lang::get('sunnyfriend.Preface-4')}}</br>◆&nbsp;{{Lang::get('sunnyfriend.Preface-5')}}</br>◆&nbsp;{{Lang::get('sunnyfriend.Preface-6')}}</br>◆&nbsp;{{Lang::get('sunnyfriend.Preface-7')}}</br>◆&nbsp;{{Lang::get('sunnyfriend.Preface-8')}}</br>◆&nbsp;{{Lang::get('sunnyfriend.Preface-9')}}</br>◆&nbsp;{{Lang::get('sunnyfriend.Preface-10')}}</h5>
                </div>
            </div>
        </div>
    </div>
@endsection