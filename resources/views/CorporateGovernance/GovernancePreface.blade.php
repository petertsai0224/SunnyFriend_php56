@extends('Layouts/app')

@section('content')
<!--banner-->
<div class="bannerArea b-box  wow fadeInDown" data-wow-delay="0.5s ">
    <img class="img-responsive" src="../assets/images/CorporateGovernance/公司治理_banner.jpg">
    <div class="titleBox clearfix">
        <h2>{{Lang::get('sunnyfriend.CorporateGovernance')}}</h2>
    </div>
</div>

<div class="wow fadeInDown" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="breads">
                <a href="../index.php">{{Lang::get('sunnyfriend.Home')}}</a>
                <span>></span>
                <span>{{Lang::get('sunnyfriend.CorporateGovernance')}}</span>
                <span>></span>
                <b>{{Lang::get('sunnyfriend.GovernancePreface')}}</b>
            </div>
        </div>
    </div>
</div>


    <!--公司治理-->
<div class="back3 wow fadeInDown" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5">
            <h3>{{Lang::get('sunnyfriend.GovernancePreface-1')}}<div class="titleline"></div></h3>
                <p>{{Lang::get('sunnyfriend.GovernancePreface-2')}}<span style="color: #009943">{{Lang::get('sunnyfriend.GovernancePreface-3')}}</span>{{Lang::get('sunnyfriend.GovernancePreface-4')}}</br>
                </p>
            </div>
            <div class="col-md-6 col-sm-6 col-md-offset-1">
                <img class="img-responsive" src="../assets/images/CorporateGovernance/CorporateGovernance.png">
            </div>
        </div>
    </div>
</div>
</div>
@endsection