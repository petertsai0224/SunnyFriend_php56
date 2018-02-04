@extends('Layouts/app')

@section('content')
<!--banner-->
    <div class="bannerArea b-box  wow fadeInDown" data-wow-delay="0.5s ">
        <img class="img-responsive" src="../resources/assets/images/about/about_banner.jpg">
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
                <b>{{Lang::get('sunnyfriend.Struture')}}</b>
            </div>
        </div>
    </div>
</div>



<!--公司架構圖-->
<div class="back3 wow fadeInDown" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <h3>{{Lang::get('sunnyfriend.Struture')}}<div class="titleline"></div></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <img alt="Brand" class="img-responsive center-block" src="../resources/assets/images/about/CompanyStructure.png">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <img alt="Brand" class="img-responsive center-block back1991" src="../resources/assets/images/house-01.svg">
                <div class="about-text text-center">
                    <h4>{{Lang::get('sunnyfriend.Struture-1')}}<h5>{{Lang::get('sunnyfriend.Struture-2')}}</h5></h4>
                    
                    <p>{{Lang::get('sunnyfriend.Struture-3')}}</p>
                    <br>
                    <p>{{Lang::get('sunnyfriend.Struture-4')}}
                    <br>{{Lang::get('sunnyfriend.Struture-5')}}
                    <br>{{Lang::get('sunnyfriend.Struture-6')}}</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <img alt="Brand" class="img-responsive center-block back1991" src="../resources/assets/images/house-01.svg">
                <div class="about-text text-center">
                    <h4>{{Lang::get('sunnyfriend.Struture-7')}}<h5>{{Lang::get('sunnyfriend.Struture-8')}}</h5></h4>
                    <p>{{Lang::get('sunnyfriend.Struture-9')}}</p>
                    <br>
                    <p>{{Lang::get('sunnyfriend.Struture-10')}}
                    <br>{{Lang::get('sunnyfriend.Struture-11')}}
                    <br>{{Lang::get('sunnyfriend.Struture-12')}}</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <img alt="Brand" class="img-responsive center-block back1991" src="../resources/assets/images/house-01.svg">
                <div class="about-text text-center">
                    <h4>{{Lang::get('sunnyfriend.Struture-13')}}<h5>{{Lang::get('sunnyfriend.Struture-14')}}</h5></h4>
                    <p>{{Lang::get('sunnyfriend.Struture-15')}}</p>
                    <br>
                    <p>{{Lang::get('sunnyfriend.Struture-16')}}
                    <br>{{Lang::get('sunnyfriend.Struture-17')}}
                    <br>{{Lang::get('sunnyfriend.Struture-18')}}</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <img alt="Brand" class="img-responsive center-block back1991" src="../resources/assets/images/house-01.svg">
                <div class="about-text text-center">
                    <h4>{{Lang::get('sunnyfriend.Struture-19')}}<h5>{{Lang::get('sunnyfriend.Struture-20')}}</h5></h4>
                    <p>{{Lang::get('sunnyfriend.Struture-21')}}</p>
                    <br>
                    <p>{{Lang::get('sunnyfriend.Struture-22')}}
                    <br>{{Lang::get('sunnyfriend.Struture-23')}}
                    <br>{{Lang::get('sunnyfriend.Struture-24')}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection