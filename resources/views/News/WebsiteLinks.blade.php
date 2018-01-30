@extends('Layouts/app')

@section('content')
<!--banner-->
<div class="bannerArea b-box  wow fadeInDown" data-wow-delay="0.5s ">
    <img class="img-responsive" src="../assets/images/news/new_banner01.jpg">
    <div class="titleBox clearfix">
        <h2>{{Lang::get('sunnyfriend.News')}}</h2>
    </div>
</div>


<div class="wow fadeInDown" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="breads">
                <a href="../index.php">{{Lang::get('sunnyfriend.Home')}}</a>
                <span>></span>
                <span>{{Lang::get('sunnyfriend.News')}}</span>
                <span>></span>
                <b>{{Lang::get('sunnyfriend.WebsiteLinks')}}</b>
            </div>
        </div>
    </div>
</div>

    <!--重大消息-->
<div class="back3 wow fadeInDown" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                        <img class="img-responsive center-block" src="../assets/images/news/EPAELogo.png">
                        <div class="btn-group-vertical">
                        <a style="text-decoration:none;" target="_blank" href="https://www.epa.gov.tw/mp.asp?mp=epa"><button class="btn btn-default btnn ">{{Lang::get('sunnyfriend.WebsiteLinks-1')}}</button></a>
                        <a style="text-decoration:none;" target="_blank" href="http://waste.epa.gov.tw/prog/IndexFrame.asp"><button class="btn btn-default btnn ">{{Lang::get('sunnyfriend.WebsiteLinks-2')}}</button></a>
                        <a style="text-decoration:none;" target="_blank" href="https://gps.epa.gov.tw/"><button class="btn btn-default btnn ">{{Lang::get('sunnyfriend.WebsiteLinks-3')}}</button></a>
                        </div>
            </div>
            <div class="col-md-6 col-sm-6">
                        <img class="img-responsive center-block" src="../assets/images/news/SFLogo.png">
                        <div class="btn-group-vertical">
                        <a style="text-decoration:none;" target="_blank" href="http://sfcp.sunnyfriend.com.tw/about/about.asp"><button class="btn btn-default btnn ">{{Lang::get('sunnyfriend.WebsiteLinks-4')}}</button></a>
                        </div>
            </div>
        </div>
                <div class="back99"> </div>
        <div class="text-center">
            <a style="text-decoration:none;" href="NewsCenter.html"><div class="btn btn-default ">{{Lang::get('sunnyfriend.WebsiteLinks-5')}}</div></a>
        </div>
    </div>
</div>
@endsection