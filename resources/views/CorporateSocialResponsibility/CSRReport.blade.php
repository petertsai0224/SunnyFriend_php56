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
                    <b>{{Lang::get('sunnyfriend.CSRReport')}}</b>
                </div>
            </div>
        </div>
    </div>
    <!--導言-->
    <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h3>{{Lang::get('sunnyfriend.CSRReport')}}<div class="titleline"></div></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <p>{{Lang::get('sunnyfriend.CSRReport-1')}}</br>
                        </br>
                    </p>
                </div>
            </div>
             <h5 style="color: #009943;">{{Lang::get('sunnyfriend.CSRReport-2')}}&nbsp;<i class="fa fa-chevron-circle-down" aria-hidden="true"></i></h5>
            <div class="row">
                @foreach($data as $img)
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="ih-item square effect14  csrshadow potatobirdmargin">
                            <img class="img-responsive img" src="{{url('resources/assets/images/CorporateSocialResponsibility/csr報告書/'.$img->OriFileName)}}">
                        </div>
                    </div>
                @endforeach
                <!--
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="ih-item square effect14  csrshadow potatobirdmargin">
                        <img class="img-responsive img" src="../assets/images/CorporateSocialResponsibility/csr報告書/2014.jpg">
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="ih-item square effect14  csrshadow potatobirdmargin">
                        <img class="img-responsive img" src="../assets/images/CorporateSocialResponsibility/csr報告書/2015.jpg">
                    </div>
                </div>
                <div class="clearfix visible-xs-block"></div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="ih-item square effect14  csrshadow potatobirdmargin">
                        <img class="img-responsive img" src="../assets/images/CorporateSocialResponsibility/csr報告書/2016.jpg">
                    </div>

                </div>
                -->
            </div>
        </div>
    </div>
@endsection