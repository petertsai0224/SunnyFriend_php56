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
                    <b>{{Lang::get('sunnyfriend.Diversification')}}</b>
                </div>
            </div>
        </div>
    </div>
    <!--日友公司董事會之組成已朝多元化方向落實執行-->
    <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <h3>{{Lang::get('sunnyfriend.Diversification')}}<div class="titleline"></div></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="h4margintop">
                        <h4><i class="fa fa-users" aria-hidden="true">&ensp; </i>{{Lang::get('sunnyfriend.Diversification-1')}}</h4>
                    </div>
                    <p>{{Lang::get('sunnyfriend.Diversification-2')}}</br>{{Lang::get('sunnyfriend.Diversification-3')}}</br>{{Lang::get('sunnyfriend.Diversification-4')}}</br>
                        </br>
                    </p>
                    <h5>{{Lang::get('sunnyfriend.Diversification-5')}}</h5>
                    <div class="table-responsive dragscroll">
                        <table class="table table2">
                            <tr>
                                <th>{{Lang::get('sunnyfriend.Diversification-6')}}</th>
                                <th>{{Lang::get('sunnyfriend.Diversification-7')}}</th>
                                <th>{{Lang::get('sunnyfriend.Diversification-8')}}</th>
                                <th>{{Lang::get('sunnyfriend.Diversification-9')}}</th>
                            </tr>
                            <tr>
                                <td data-th="職稱">{{Lang::get('sunnyfriend.Diversification-10')}}</td>
                                <td data-th="姓名">{{Lang::get('sunnyfriend.Diversification-11')}}</td>
                                <td data-th="代表人">{{Lang::get('sunnyfriend.Diversification-12')}}</td>
                                <td data-th="專業背景">{{Lang::get('sunnyfriend.Diversification-13')}}</td>
                            </tr>
                            <tr>
                                <td data-th="職稱">{{Lang::get('sunnyfriend.Diversification-14')}}</td>
                                <td data-th="姓名">{{Lang::get('sunnyfriend.Diversification-15')}}</td>
                                <td data-th="代表人">{{Lang::get('sunnyfriend.Diversification-16')}}</td>
                                <td data-th="專業背景">{{Lang::get('sunnyfriend.Diversification-17')}}</td>
                            </tr>
                            <tr>
                                <td data-th="職稱">{{Lang::get('sunnyfriend.Diversification-18')}}</td>
                                <td data-th="姓名">{{Lang::get('sunnyfriend.Diversification-19')}}</td>
                                <td data-th="代表人">{{Lang::get('sunnyfriend.Diversification-20')}}</td>
                                <td data-th="專業背景">{{Lang::get('sunnyfriend.Diversification-21')}}</td>
                            </tr>
                            <tr>
                                <td data-th="職稱">{{Lang::get('sunnyfriend.Diversification-21.1')}}</td>
                                <td data-th="姓名">{{Lang::get('sunnyfriend.Diversification-21.2')}}</td>
                                <td data-th="代表人">{{Lang::get('sunnyfriend.Diversification-21.3')}}</td>
                                <td data-th="專業背景">{{Lang::get('sunnyfriend.Diversification-21.4')}}</td>
                            </tr>
                            <tr>
                                <td data-th="職稱">{{Lang::get('sunnyfriend.Diversification-22')}}</td>
                                <td data-th="姓名">{{Lang::get('sunnyfriend.Diversification-23')}}</td>
                                <td data-th="代表人">{{Lang::get('sunnyfriend.Diversification-24')}}</td>
                                <td data-th="專業背景">{{Lang::get('sunnyfriend.Diversification-25')}}</td>
                            </tr>
                            <tr>
                                <td data-th="職稱">{{Lang::get('sunnyfriend.Diversification-26')}}</td>
                                <td data-th="姓名">{{Lang::get('sunnyfriend.Diversification-27')}}</td>
                                <td data-th="代表人">{{Lang::get('sunnyfriend.Diversification-28')}}</td>
                                <td data-th="專業背景">{{Lang::get('sunnyfriend.Diversification-9')}}</td>
                            </tr>
                            <tr>
                                <td data-th="職稱">{{Lang::get('sunnyfriend.Diversification-30')}}</td>
                                <td data-th="姓名">{{Lang::get('sunnyfriend.Diversification-31')}}</td>
                                <td data-th="代表人">{{Lang::get('sunnyfriend.Diversification-32')}}</td>
                                <td data-th="專業背景">{{Lang::get('sunnyfriend.Diversification-33')}}</td>
                            </tr>
                            <tr>
                                <td data-th="職稱">{{Lang::get('sunnyfriend.Diversification-34')}}</td>
                                <td data-th="姓名">{{Lang::get('sunnyfriend.Diversification-35')}}</td>
                                <td data-th="代表人">{{Lang::get('sunnyfriend.Diversification-36')}}</td>
                                <td data-th="專業背景">{{Lang::get('sunnyfriend.Diversification-37')}}</td>
                            </tr>
                            <tr>
                                <td data-th="職稱">{{Lang::get('sunnyfriend.Diversification-38')}}</td>
                                <td data-th="姓名">{{Lang::get('sunnyfriend.Diversification-39')}}</td>
                                <td data-th="代表人">{{Lang::get('sunnyfriend.Diversification-40')}}</td>
                                <td data-th="專業背景">{{Lang::get('sunnyfriend.Diversification-41')}}</td>
                            </tr>
                            <tr>
                                <td data-th="職稱">{{Lang::get('sunnyfriend.Diversification-42')}}</td>
                                <td data-th="姓名">{{Lang::get('sunnyfriend.Diversification-43')}}</td>
                                <td data-th="代表人">{{Lang::get('sunnyfriend.Diversification-44')}}</td>
                                <td data-th="專業背景">{{Lang::get('sunnyfriend.Diversification-45')}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
                    <div class="back99"></div>
                    <div class="row wow fadeInDown" data-wow-delay="0.5s">
                        <div class="col-md-12 col-sm-12">
                            <h5>{{Lang::get('sunnyfriend.Diversification-46')}}</h5>
                            <div class="table-responsive dragscroll">
                                <table class="table table1">
                                    <tr>
                                        <th>{{Lang::get('sunnyfriend.Diversification-47')}}</th>
                                        <th>{{Lang::get('sunnyfriend.Diversification-48')}}</th>
                                        <th>{{Lang::get('sunnyfriend.Diversification-49')}}</th>
                                        <th>{{Lang::get('sunnyfriend.Diversification-50')}}</th>
                                        <th>{{Lang::get('sunnyfriend.Diversification-51')}}</th>
                                        <th>{{Lang::get('sunnyfriend.Diversification-52')}}</th>
                                        <th>{{Lang::get('sunnyfriend.Diversification-53')}}</th>
                                    </tr>
                                    <tr>
                                        <td data-th="董事">{{Lang::get('sunnyfriend.Diversification-54')}}</td>
                                        <td data-th="性別">{{Lang::get('sunnyfriend.Diversification-55')}}</td>
                                        <td data-th="經營管理">V</td>
                                        <td data-th="領導決策">V</td>
                                        <td data-th="產業知識">V</td>
                                        <td data-th="財務會計"></td>
                                        <td data-th="法律">V</td>
                                    </tr>
                                    <tr>
                                        <td data-th="董事">{{Lang::get('sunnyfriend.Diversification-56')}}</td>
                                        <td data-th="性別">{{Lang::get('sunnyfriend.Diversification-57')}}</td>
                                        <td data-th="經營管理">V</td>
                                        <td data-th="領導決策">V</td>
                                        <td data-th="產業知識"></td>
                                        <td data-th="財務會計">V</td>
                                        <td data-th="法律"></td>
                                    </tr>
                                    <tr>
                                        <td data-th="董事">{{Lang::get('sunnyfriend.Diversification-58')}}</td>
                                        <td data-th="性別">{{Lang::get('sunnyfriend.Diversification-59')}}</td>
                                        <td data-th="經營管理">V</td>
                                        <td data-th="領導決策">V</td>
                                        <td data-th="產業知識"></td>
                                        <td data-th="財務會計">V</td>
                                        <td data-th="法律"></td>
                                    </tr>
                                    <tr>
                                        <td data-th="董事">{{Lang::get('sunnyfriend.Diversification-60')}}</td>
                                        <td data-th="性別">{{Lang::get('sunnyfriend.Diversification-61')}}</td>
                                        <td data-th="經營管理">V</td>
                                        <td data-th="領導決策">V</td>
                                        <td data-th="產業知識">V</td>
                                        <td data-th="財務會計"></td>
                                        <td data-th="法律"></td>
                                    </tr>
                                    <tr>
                                        <td data-th="董事">{{Lang::get('sunnyfriend.Diversification-62')}}</td>
                                        <td data-th="性別">{{Lang::get('sunnyfriend.Diversification-63')}}</td>
                                        <td data-th="經營管理">V</td>
                                        <td data-th="領導決策">V</td>
                                        <td data-th="產業知識"></td>
                                        <td data-th="財務會計">V</td>
                                        <td data-th="法律">V</td>
                                    </tr>
                                    <tr>
                                        <td data-th="董事">{{Lang::get('sunnyfriend.Diversification-64')}}</td>
                                        <td data-th="性別">{{Lang::get('sunnyfriend.Diversification-65')}}</td>
                                        <td data-th="經營管理">V</td>
                                        <td data-th="領導決策">V</td>
                                        <td data-th="產業知識">V</td>
                                        <td data-th="財務會計"></td>
                                        <td data-th="法律"></td>
                                    </tr>
                                    <tr>
                                        <td data-th="董事">{{Lang::get('sunnyfriend.Diversification-66')}}</td>
                                        <td data-th="性別">{{Lang::get('sunnyfriend.Diversification-67')}}</td>
                                        <td data-th="經營管理">V</td>
                                        <td data-th="領導決策">V</td>
                                        <td data-th="產業知識"></td>
                                        <td data-th="財務會計"></td>
                                        <td data-th="法律">V</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
@endsection