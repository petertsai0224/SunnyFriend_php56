@extends('Layouts/app')

@section('content')
    <!--banner-->
    <div class="bannerArea b-box  wow fadeInDown" data-wow-delay="0.5s ">
        <img class="img-responsive" src="../assets/images/stackholder/Business People Meeting Discussion Working Concept.jpg">
        <div class="titleBox clearfix">
            <h2>{{Lang::get('sunnyfriend.Stackholder')}}</h2>
        </div>
    </div>
    <div class="wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="breads">
                    <a href="../index.php">{{Lang::get('sunnyfriend.Home')}}</a>
                    <span>></span>
                    <span>{{Lang::get('sunnyfriend.Stackholder')}}</span>
                    <span>></span>
                    <b>{{Lang::get('sunnyfriend.UBGM')}}</b>
                </div>
            </div>
        </div>
    </div>
    <!--公司治理-->
    <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <h3>{{Lang::get('sunnyfriend.UBGM')}}<div class="titleline"></div></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <p>{{Lang::get('sunnyfriend.UBGM-1')}}</br>
                        </br>
                    </p>
                
                <p style="color:#009943">{{Lang::get('sunnyfriend.UBGM-2')}}</br>{{Lang::get('sunnyfriend.UBGM-3')}}</br>{{Lang::get('sunnyfriend.UBGM-4')}}</br>{{Lang::get('sunnyfriend.UBGM-5')}}</p>
                <img class="img-responsive center-block" src="../assets/images/stackholder/039.png">
            </div>
        </div>
    </div>
    </div>
@endsection