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
                    <b>{{Lang::get('sunnyfriend.ManagingTeam')}}</b>
                </div>
            </div>
        </div>
    </div>
    <!--公司架構圖-->
    <div class="wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <h3>{{Lang::get('sunnyfriend.ManagingTeam-1')}}<div class="titleline"></div></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-5">
                    <img class="img-responsive" src="../resources/assets/images/CorporateSocialResponsibility/1000B.jpg">
                </br></br></br>
                <img class="img-responsive" src="../resources/assets/images/CorporateSocialResponsibility/027.jpg">
            </div>
            <div class="col-md-8 col-sm-7">
                <div class="h4margintop h4marginbottom">
                    <h4>{{Lang::get('sunnyfriend.ManagingTeam-2')}}</h4>
                    <h4>{{Lang::get('sunnyfriend.ManagingTeam-3')}}</br></br></h4>
                </div>
                <p>{{Lang::get('sunnyfriend.ManagingTeam-4')}}</br></br></p>
                <p>{{Lang::get('sunnyfriend.ManagingTeam-5')}}</br></br>
                </p>
                <p>{{Lang::get('sunnyfriend.ManagingTeam-6')}}</br></br>
                </p>
            </div>
        </div>
        <div class="back99"> </div>
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <h3>{{Lang::get('sunnyfriend.ManagingTeam-7')}}<div class="titleline"></div></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <center>
                    <div class="table-responsive dragscroll">
                        <table class="table table2">
                            <tr>
                                <th width="6%">{{Lang::get('sunnyfriend.ManagingTeam-8')}}</th>
                                <th width="6%">{{Lang::get('sunnyfriend.ManagingTeam-9')}}</th>
                                <th width="6%">{{Lang::get('sunnyfriend.ManagingTeam-10')}}</th>
                                <th width="10%">{{Lang::get('sunnyfriend.ManagingTeam-11')}}</th>
                            </tr>
                            <tr>
                                <td data-th="部門別">{{Lang::get('sunnyfriend.ManagingTeam-12')}}</td>
                                <td data-th="職稱">{{Lang::get('sunnyfriend.ManagingTeam-13')}}</br>{{Lang::get('sunnyfriend.ManagingTeam-14')}}</td>
                                <td data-th="姓名">{{Lang::get('sunnyfriend.ManagingTeam-15')}}</td>
                                <td data-th="主要學經歷">{{Lang::get('sunnyfriend.ManagingTeam-16')}}</br>{{Lang::get('sunnyfriend.ManagingTeam-17')}}</br>{{Lang::get('sunnyfriend.ManagingTeam-18')}}</br>{{Lang::get('sunnyfriend.ManagingTeam-19')}}</td>
                            </tr>
                            <tr>
                                <td data-th="部門別">{{Lang::get('sunnyfriend.ManagingTeam-20')}}</td>
                                <td data-th="職稱">{{Lang::get('sunnyfriend.ManagingTeam-21')}}</td>
                                <td data-th="姓名">{{Lang::get('sunnyfriend.ManagingTeam-22')}}</td>
                                <td data-th="主要學經歷">{{Lang::get('sunnyfriend.ManagingTeam-23')}}</br>{{Lang::get('sunnyfriend.ManagingTeam-24')}}</td>
                            </tr>
                            <tr>
                                <td data-th="部門別">{{Lang::get('sunnyfriend.ManagingTeam-25')}}</td>
                                <td data-th="職稱">{{Lang::get('sunnyfriend.ManagingTeam-26')}}</td>
                                <td data-th="姓名">{{Lang::get('sunnyfriend.ManagingTeam-27')}}</td>
                                <td data-th="主要學經歷">{{Lang::get('sunnyfriend.ManagingTeam-28')}}</br>{{Lang::get('sunnyfriend.ManagingTeam-29')}}</td>
                            </tr>
                            <tr>
                                <td data-th="部門別">{{Lang::get('sunnyfriend.ManagingTeam-30')}}</td>
                                <td data-th="職稱">{{Lang::get('sunnyfriend.ManagingTeam-31')}}</td>
                                <td data-th="姓名">{{Lang::get('sunnyfriend.ManagingTeam-32')}}</td>
                                <td data-th="主要學經歷">{{Lang::get('sunnyfriend.ManagingTeam-33')}}</br>{{Lang::get('sunnyfriend.ManagingTeam-34')}}</td>
                            </tr>
                            <tr>
                                <td data-th="部門別">{{Lang::get('sunnyfriend.ManagingTeam-35')}}</td>
                                <td data-th="職稱">{{Lang::get('sunnyfriend.ManagingTeam-36')}}</td>
                                <td data-th="姓名">{{Lang::get('sunnyfriend.ManagingTeam-37')}}</td>
                                <td data-th="主要學經歷">{{Lang::get('sunnyfriend.ManagingTeam-38')}}</br>{{Lang::get('sunnyfriend.ManagingTeam-39')}}</br>{{Lang::get('sunnyfriend.ManagingTeam-40')}}</td>
                            </tr>
                            <tr>
                                <td data-th="部門別">{{Lang::get('sunnyfriend.ManagingTeam-41')}}</td>
                                <td data-th="職稱">{{Lang::get('sunnyfriend.ManagingTeam-42')}}</td>
                                <td data-th="姓名">{{Lang::get('sunnyfriend.ManagingTeam-43')}}</td>
                                <td data-th="主要學經歷">{{Lang::get('sunnyfriend.ManagingTeam-44')}}</br>{{Lang::get('sunnyfriend.ManagingTeam-45')}}</br>{{Lang::get('sunnyfriend.ManagingTeam-46')}}</br>{{Lang::get('sunnyfriend.ManagingTeam-47')}}</td>
                            </tr>
                            <tr>
                                <td data-th="部門別">{{Lang::get('sunnyfriend.ManagingTeam-48')}}</td>
                                <td data-th="職稱">{{Lang::get('sunnyfriend.ManagingTeam-49')}}</td>
                                <td data-th="姓名">{{Lang::get('sunnyfriend.ManagingTeam-50')}}</td>
                                <td data-th="主要學經歷">{{Lang::get('sunnyfriend.ManagingTeam-51')}}</br>{{Lang::get('sunnyfriend.ManagingTeam-52')}}</td>
                            </tr>
                            <tr>
                                <td data-th="部門別">{{Lang::get('sunnyfriend.ManagingTeam-53')}}</br>{{Lang::get('sunnyfriend.ManagingTeam-54')}}</br>{{Lang::get('sunnyfriend.ManagingTeam-55')}}</td>
                                <td data-th="職稱">{{Lang::get('sunnyfriend.ManagingTeam-56')}}</td>
                                <td data-th="姓名">{{Lang::get('sunnyfriend.ManagingTeam-57')}}</td>
                                <td data-th="主要學經歷">{{Lang::get('sunnyfriend.ManagingTeam-58')}}</td>
                            </tr>
                            <tr>
                                <td data-th="部門別">{{Lang::get('sunnyfriend.ManagingTeam-59')}}</td>
                                <td data-th="職稱">{{Lang::get('sunnyfriend.ManagingTeam-60')}}</td>
                                <td data-th="姓名">{{Lang::get('sunnyfriend.ManagingTeam-61')}}</td>
                                <td data-th="主要學經歷">{{Lang::get('sunnyfriend.ManagingTeam-62')}}</br>{{Lang::get('sunnyfriend.ManagingTeam-63')}}</td>
                            </tr>
                            <tr>
                                <td data-th="部門別">{{Lang::get('sunnyfriend.ManagingTeam-64')}}</br>{{Lang::get('sunnyfriend.ManagingTeam-65')}}</td>
                                <td data-th="職稱">{{Lang::get('sunnyfriend.ManagingTeam-66')}}</td>
                                <td data-th="姓名">{{Lang::get('sunnyfriend.ManagingTeam-67')}}</td>
                                <td data-th="主要學經歷">{{Lang::get('sunnyfriend.ManagingTeam-68')}}</br>{{Lang::get('sunnyfriend.ManagingTeam-69')}}</td>
                            </tr>
                            <tr>
                                <td data-th="部門別">{{Lang::get('sunnyfriend.ManagingTeam-70')}}</td>
                                <td data-th="職稱">{{Lang::get('sunnyfriend.ManagingTeam-71')}}</td>
                                <td data-th="姓名">{{Lang::get('sunnyfriend.ManagingTeam-72')}}</td>
                                <td data-th="主要學經歷">{{Lang::get('sunnyfriend.ManagingTeam-73')}}</br>{{Lang::get('sunnyfriend.ManagingTeam-74')}}</br>{{Lang::get('sunnyfriend.ManagingTeam-75')}}</td>
                            </tr>
                            <tr>
                                <td data-th="部門別">{{Lang::get('sunnyfriend.ManagingTeam-76')}}</td>
                                <td data-th="職稱">{{Lang::get('sunnyfriend.ManagingTeam-77')}}</td>
                                <td data-th="姓名">{{Lang::get('sunnyfriend.ManagingTeam-78')}}</td>
                                <td data-th="主要學經歷">{{Lang::get('sunnyfriend.ManagingTeam-79')}}</br>{{Lang::get('sunnyfriend.ManagingTeam-80')}}</br>{{Lang::get('sunnyfriend.ManagingTeam-81')}}</br>{{Lang::get('sunnyfriend.ManagingTeam-82')}}</td>
                            </tr>
                        </table>
                    </div>
                </center> 
            </div>
        </div>
    </div>
    </div>
    @endsection