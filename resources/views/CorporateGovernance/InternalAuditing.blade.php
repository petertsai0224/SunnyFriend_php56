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
                    <a href="../index.php">首頁</a>
                    <span>></span>
                    <span>{{Lang::get('sunnyfriend.CorporateGovernance')}}</span>
                    <span>></span>
                    <b>{{Lang::get('sunnyfriend.InternalAuditing')}}</b>
                </div>
            </div>
        </div>
    </div>
    <!--公司治理-->
    <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <h3>{{Lang::get('sunnyfriend.InternalAuditing')}}<div class="titleline"></div></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <p>{{Lang::get('sunnyfriend.InternalAuditing-1')}} </br></br>{{Lang::get('sunnyfriend.InternalAuditing-2')}}
                        </br>
                        </br>
                    </p>
                </div>
                <div class="col-md-12 col-sm-12">
                    <table class="table table2">
                        <tr>
                            <th width="60%">{{Lang::get('sunnyfriend.InternalAuditing-3')}}</th>
                            <th width="10%" style="text-align: center;">{{Lang::get('sunnyfriend.InternalAuditing-4')}}</th>
                        </tr>
                        <tr>
                            <td data-th="檔案名稱">{{Lang::get('sunnyfriend.InternalAuditing-5')}}</td>
                            <td data-th="檔案下載"><a href='../assets/file/InternalAuditing/InternalAuditing.pdf' target='_blank'><img class="img-responsive center-block" src="../assets/images/CorporateGovernance/pdf_download.png"></a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection