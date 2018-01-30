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
                    <a href="../index.html">{{Lang::get('sunnyfriend.Home')}}</a>
                    <span>></span>
                    <span>{{Lang::get('sunnyfriend.AboutSF')}}</span>
                    <span>></span>
                    <b>{{Lang::get('sunnyfriend.Shareholding')}}</b>
                </div>
            </div>
        </div>
    </div>
    <!--股權結構-->
    <div class=" wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <h3>{{Lang::get('sunnyfriend.Shareholding')}}<div class="titleline"></div></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                        <h4>{{Lang::get('sunnyfriend.Shareholding-1')}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#999999";>{{Lang::get('sunnyfriend.Shareholding-2')}}</span></h4>
                    <div class="table-responsive dragscroll">
                        <table class="table table2 ">
                            <tr>
                                <th width="10%">{{Lang::get('sunnyfriend.Shareholding-3')}}</th>
                                <th width="40%" style="text-align: center;">{{Lang::get('sunnyfriend.Shareholding-4')}}</th>
                                <th width="50%" style="text-align: center;">{{Lang::get('sunnyfriend.Shareholding-5')}}</th>
                            </tr>
                            <tr>
                                <td data-th="主要股東名稱">{{Lang::get('sunnyfriend.Shareholding-6')}}</td>
                                <td style="text-align: center;" data-th="持有股數">{{Lang::get('sunnyfriend.Shareholding-7')}}</td>
                                <td style="text-align: center;" data-th="持股比例">{{Lang::get('sunnyfriend.Shareholding-8')}}</td>
                            </tr>
                            <tr>
                                <td data-th="主要股東名稱">{{Lang::get('sunnyfriend.Shareholding-9')}}</td>
                                <td style="text-align: center;" data-th="持有股數">{{Lang::get('sunnyfriend.Shareholding-10')}}</td>
                                <td style="text-align: center;" data-th="持股比例">{{Lang::get('sunnyfriend.Shareholding-11')}}</td>
                            </tr>
                            <tr>
                                <td data-th="主要股東名稱">{{Lang::get('sunnyfriend.Shareholding-12')}}</td>
                                <td style="text-align: center;" data-th="持有股數">{{Lang::get('sunnyfriend.Shareholding-13')}}</td>
                                <td style="text-align: center;" data-th="持股比例">{{Lang::get('sunnyfriend.Shareholding-14')}}</td>
                            </tr>
                            <tr>
                                <td data-th="主要股東名稱">{{Lang::get('sunnyfriend.Shareholding-15')}}</td>
                                <td style="text-align: center;" data-th="持有股數">{{Lang::get('sunnyfriend.Shareholding-16')}}</td>
                                <td style="text-align: center;" data-th="持股比例">{{Lang::get('sunnyfriend.Shareholding-17')}}</td>
                            </tr>
                            <tr>
                                <td data-th="主要股東名稱">{{Lang::get('sunnyfriend.Shareholding-18')}}</td>
                                <td style="text-align: center;" data-th="持有股數">{{Lang::get('sunnyfriend.Shareholding-19')}}</td>
                                <td style="text-align: center;" data-th="持股比例">{{Lang::get('sunnyfriend.Shareholding-20')}}</td>
                            </tr>
                            <tr>
                                <td data-th="主要股東名稱">{{Lang::get('sunnyfriend.Shareholding-21')}}</td>
                                <td style="text-align: center;" data-th="持有股數">{{Lang::get('sunnyfriend.Shareholding-22')}}</td>
                                <td style="text-align: center;" data-th="持股比例">{{Lang::get('sunnyfriend.Shareholding-23')}}</td>
                            </tr>
                            <tr>
                                <td data-th="主要股東名稱">{{Lang::get('sunnyfriend.Shareholding-24')}}</td>
                                <td style="text-align: center;" data-th="持有股數">{{Lang::get('sunnyfriend.Shareholding-25')}}</td>
                                <td style="text-align: center;" data-th="持股比例">{{Lang::get('sunnyfriend.Shareholding-26')}}</td>
                            </tr>
                            <tr>
                                <td data-th="主要股東名稱">{{Lang::get('sunnyfriend.Shareholding-27')}}</td>
                                <td style="text-align: center;" data-th="持有股數">{{Lang::get('sunnyfriend.Shareholding-28')}}</td>
                                <td style="text-align: center;" data-th="持股比例">{{Lang::get('sunnyfriend.Shareholding-29')}}</td>
                            </tr>
                            <tr>
                                <td data-th="主要股東名稱">{{Lang::get('sunnyfriend.Shareholding-30')}}</td>
                                <td style="text-align: center;" data-th="持有股數">{{Lang::get('sunnyfriend.Shareholding-31')}}</td>
                                <td style="text-align: center;" data-th="持股比例">{{Lang::get('sunnyfriend.Shareholding-32')}}</td>
                            </tr>
                            <tr>
                                <td data-th="主要股東名稱">{{Lang::get('sunnyfriend.Shareholding-33')}}</td>
                                <td style="text-align: center;" data-th="持有股數">{{Lang::get('sunnyfriend.Shareholding-34')}}</td>
                                <td style="text-align: center;" data-th="持股比例">{{Lang::get('sunnyfriend.Shareholding-35')}}</td>
                            </tr>
                        </table>
                    </div>
                                            <h6>{{Lang::get('sunnyfriend.Shareholding-36')}}</h6>
                </div>
            </div>
            <div class="back99"></div>    
            <!--法人股東之主要股東-->
            <div class="row wow fadeInDown" data-wow-delay="0.5s">
                <div class="col-md-12 col-sm-12">
                        <h4>{{Lang::get('sunnyfriend.Shareholding-37')}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#999999";>{{Lang::get('sunnyfriend.Shareholding-38')}}</span></h4>
                    <div class="table-responsive dragscroll">
                        <table class="table table2 ">
                            <tr>
                                <th width="20%">{{Lang::get('sunnyfriend.Shareholding-39')}}</th>
                                <th width="80%">{{Lang::get('sunnyfriend.Shareholding-40')}}</th>
                            </tr>
                            <tr>
                                <td data-th="法人股東名稱">{{Lang::get('sunnyfriend.Shareholding-41')}}</td>
                                <td data-th="法人股東之主要股東">{{Lang::get('sunnyfriend.Shareholding-42')}}</td>
                            </tr>
                            <tr>
                                <td data-th="法人股東名稱">{{Lang::get('sunnyfriend.Shareholding-43')}}</td>
                                <td data-th="法人股東之主要股東">{{Lang::get('sunnyfriend.Shareholding-4')}}</td>
                            </tr>
                            <tr>
                                <td data-th="法人股東名稱">{{Lang::get('sunnyfriend.Shareholding-45')}}</td>
                                <td data-th="法人股東之主要股東">{{Lang::get('sunnyfriend.Shareholding-46')}}</br>{{Lang::get('sunnyfriend.Shareholding-47')}}</br>{{Lang::get('sunnyfriend.Shareholding-48')}}</br>{{Lang::get('sunnyfriend.Shareholding-49')}}
                                </td>
                            </tr>
                            <tr>
                                <td data-th="法人股東名稱">{{Lang::get('sunnyfriend.Shareholding-50')}}</td>
                                <td data-th="法人股東之主要股東">{{Lang::get('sunnyfriend.Shareholding-51')}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="back99"></div>
        </div>
    </div>
    <!--法人股東之主要股東屬法人股東代表者-->
    <div class=" back3 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                        <h4>{{Lang::get('sunnyfriend.Shareholding-52')}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#999999";>{{Lang::get('sunnyfriend.Shareholding-53')}}</span></h4>
                    <div class="table-responsive dragscroll">
                        <table class="table table2 ">
                            <tr>
                                <th width="20%">{{Lang::get('sunnyfriend.Shareholding-54')}}</th>
                                <th width="80%">{{Lang::get('sunnyfriend.Shareholding-55')}}</th>
                            </tr>
                            <tr>
                                <td data-th="法人名稱">{{Lang::get('sunnyfriend.Shareholding-56')}}</td>
                                <td data-th="法人之主要股東">{{Lang::get('sunnyfriend.Shareholding-57')}}</br>{{Lang::get('sunnyfriend.Shareholding-58')}}</br>{{Lang::get('sunnyfriend.Shareholding-59')}}</td>
                            </tr>
                            <tr>
                                <td data-th="法人名稱">{{Lang::get('sunnyfriend.Shareholding-60')}}</td>
                                <td data-th="法人之主要股東">{{Lang::get('sunnyfriend.Shareholding-61')}}</td>
                            </tr>
                            <tr>
                                <td data-th="法人名稱">{{Lang::get('sunnyfriend.Shareholding-62')}}</td>
                                <td data-th="法人之主要股東">{{Lang::get('sunnyfriend.Shareholding-63')}}</td>
                            </tr>
                            <tr>
                                <td data-th="法人名稱">{{Lang::get('sunnyfriend.Shareholding-64')}}</td>
                                <td data-th="法人之主要股東">{{Lang::get('sunnyfriend.Shareholding-65')}}</td>
                            </tr>
                            <tr>
                                <td data-th="法人名稱">{{Lang::get('sunnyfriend.Shareholding-66')}}</td>
                                <td data-th="法人之主要股東">{{Lang::get('sunnyfriend.Shareholding-67')}}</br>{{Lang::get('sunnyfriend.Shareholding-68')}}</td>
                            </tr>
                            <tr>
                                <td data-th="法人名稱">{{Lang::get('sunnyfriend.Shareholding-69')}}</td>
                                <td data-th="法人之主要股東">{{Lang::get('sunnyfriend.Shareholding-70')}}</td>
                            </tr>
                            <tr>
                                <td data-th="法人名稱">{{Lang::get('sunnyfriend.Shareholding-71')}}</td>
                                <td data-th="法人之主要股東">{{Lang::get('sunnyfriend.Shareholding-72')}}</td>
                            </tr>
                            <tr>
                                <td data-th="法人名稱">{{Lang::get('sunnyfriend.Shareholding-73')}}</td>
                                <td data-th="法人之主要股東">{{Lang::get('sunnyfriend.Shareholding-74')}}</td>
                            </tr>
                            <tr>
                                <td data-th="法人名稱">{{Lang::get('sunnyfriend.Shareholding-75')}}</br>{{Lang::get('sunnyfriend.Shareholding-76')}}</td>
                                <td data-th="法人之主要股東">{{Lang::get('sunnyfriend.Shareholding-77')}}</td>
                            </tr>
                            <tr>
                                <td data-th="法人名稱">{{Lang::get('sunnyfriend.Shareholding-78')}}</td>
                                <td data-th="法人之主要股東">{{Lang::get('sunnyfriend.Shareholding-79')}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection