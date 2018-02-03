        @extends('Layouts/app')

        @section('content')
        <!--banner-->
        <div class="bannerArea b-box  wow fadeInDown" data-wow-delay="0.5s ">
            <img class="img-responsive" src="../resources/assets/images/about/about_banner.jpg">
            <div class="titleBox clearfix">
                <h2>{{Lang::get('sunnyfriend.CompanyProfile')}}</h2>
            </div>
        </div>
        <div class="wow fadeInDown back04" data-wow-delay="0.5s">
            <div class="container">
                <div class="row">
                    <div class="breads">
                        <a href="../index.php">{{Lang::get('sunnyfriend.Home')}}</a>
                        <span>></span>
                        <span>{{Lang::get('sunnyfriend.CompanyProfile')}}</span>
                        <span>></span>
                        <b>{{Lang::get('sunnyfriend.Profile')}}</b>
                    </div>
                </div>
            </div>
        </div>
        <!--關於日友-->
        <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h3>{{Lang::get('sunnyfriend.Profile')}}<div class="titleline"></div></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <p>{{Lang::get('sunnyfriend.CompanyProfile-1')}}
                        </br>
                    </p>
                    <p>{{Lang::get('sunnyfriend.CompanyProfile-2')}}</br>{{Lang::get('sunnyfriend.CompanyProfile-3')}}</br>{{Lang::get('sunnyfriend.CompanyProfile-4')}}</br>{{Lang::get('sunnyfriend.CompanyProfile-5')}}</p>
                    <a target="_blank" class="btn btn-default btn-block" href="../assets/file/app/SFCP(CH).pdf" role="button" style="z-index:999;">{{Lang::get('sunnyfriend.CompanyProfile-6')}}</a>
                    <a target="_blank" class="btn btn-default btn-block" href="https://www.youtube.com/watch?v=nzoY7HRWAew&t=" role="button" style="z-index:999;">{{Lang::get('sunnyfriend.CompanyProfile-7')}}</a>
                </div>
                <div class="col-md-8 col-sm-6">
                    <div class="service-box1">
                        <img alt="Brand" class="img-responsive" style="box-shadow:3px 5px 11px rgba(159, 159, 159, 0.26);" src="../resources/assets/images/about/about.jpg">
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <!--公司沿革-->
        <div class="back02 back3 wow fadeInDown" data-wow-delay="0.5s">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h3>{{Lang::get('sunnyfriend.CompanyProfile-8')}}<div class="titleline"></div></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="back1993 col-md-12 col-sm-12">
                        <p>{{Lang::get('sunnyfriend.CompanyProfile-9')}}</br>
                        </br>
                    </p>
                    <ul>
                        <li>{{Lang::get('sunnyfriend.CompanyProfile-10')}}&nbsp;<span>{{Lang::get('sunnyfriend.CompanyProfile-11')}}</span></li>
                        <li>{{Lang::get('sunnyfriend.CompanyProfile-12')}}&nbsp;<span>{{Lang::get('sunnyfriend.CompanyProfile-13')}}</span></li>
                        <li>{{Lang::get('sunnyfriend.CompanyProfile-14')}}&nbsp;<span>{{Lang::get('sunnyfriend.CompanyProfile-15')}}</span></li>
                        <li>{{Lang::get('sunnyfriend.CompanyProfile-16')}}&nbsp;<span>{{Lang::get('sunnyfriend.CompanyProfile-17')}}</span></li>
                        <li>{{Lang::get('sunnyfriend.CompanyProfile-18')}}&nbsp;<span>{{Lang::get('sunnyfriend.CompanyProfile-19')}}</span></li>
                        <li>{{Lang::get('sunnyfriend.CompanyProfile-20')}}&nbsp;<span>{{Lang::get('sunnyfriend.CompanyProfile-21')}}</span></li>
                        <li>{{Lang::get('sunnyfriend.CompanyProfile-22')}}&nbsp;<span>{{Lang::get('sunnyfriend.CompanyProfile-23')}}</span></li>
                        <li>{{Lang::get('sunnyfriend.CompanyProfile-24')}}&nbsp;<span>{{Lang::get('sunnyfriend.CompanyProfile-25')}}</span></li>
                        <li>{{Lang::get('sunnyfriend.CompanyProfile-26')}}&nbsp;<span>{{Lang::get('sunnyfriend.CompanyProfile-27')}}</span></li>
                        <li>{{Lang::get('sunnyfriend.CompanyProfile-28')}}&nbsp;<span>{{Lang::get('sunnyfriend.CompanyProfile-29')}}</span></li>
                        <li>{{Lang::get('sunnyfriend.CompanyProfile-30')}}&nbsp;<span>{{Lang::get('sunnyfriend.CompanyProfile-31')}}</span></li>
                        <li>{{Lang::get('sunnyfriend.CompanyProfile-32')}}&nbsp;<span>{{Lang::get('sunnyfriend.CompanyProfile-33')}}</span></li>
                        <li>{{Lang::get('sunnyfriend.CompanyProfile-34')}}&nbsp;<span>{{Lang::get('sunnyfriend.CompanyProfile-35')}}</span></li>
                        <li>{{Lang::get('sunnyfriend.CompanyProfile-36')}}&nbsp;<span>{{Lang::get('sunnyfriend.CompanyProfile-37')}}</span></li>
                        <li>{{Lang::get('sunnyfriend.CompanyProfile-38')}}&nbsp;<span>{{Lang::get('sunnyfriend.CompanyProfile-39')}}</span></li>
                        <li>{{Lang::get('sunnyfriend.CompanyProfile-40')}}&nbsp;<span>{{Lang::get('sunnyfriend.CompanyProfile-41')}}</span></li>
                        <li>{{Lang::get('sunnyfriend.CompanyProfile-42')}}&nbsp;<span>{{Lang::get('sunnyfriend.CompanyProfile-43')}}</span></li>
                        <li>{{Lang::get('sunnyfriend.CompanyProfile-44')}}&nbsp;<span>{{Lang::get('sunnyfriend.CompanyProfile-45')}}</span></li>
                        <li>{{Lang::get('sunnyfriend.CompanyProfile-46')}}&nbsp;<span>{{Lang::get('sunnyfriend.CompanyProfile-47')}}</span></li>
                        <li>{{Lang::get('sunnyfriend.CompanyProfile-48')}}&nbsp;<span>{{Lang::get('sunnyfriend.CompanyProfile-49')}}</span></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
        <!--基本資料表-->
        <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
            <div class="container">
                <div class="back99"></div>
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <h3>{{Lang::get('sunnyfriend.CompanyProfile-50')}}<div class="titleline"></div></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="table-responsive dragscroll">
                            <table class="table ">
                                <tr>
                                    <th>{{Lang::get('sunnyfriend.CompanyProfile-51')}}</th>
                                    <th>{{Lang::get('sunnyfriend.CompanyProfile-52')}}</th>
                                </tr>
                                <tr>
                                    <td data-th="股票代號：8341">{{Lang::get('sunnyfriend.CompanyProfile-53')}}</td>
                                    <td data-th="產業類別：其他">{{Lang::get('sunnyfriend.CompanyProfile-54')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="股票代號：8341">{{Lang::get('sunnyfriend.CompanyProfile-55')}}</td>
                                    <td data-th="產業類別：其他">{{Lang::get('sunnyfriend.CompanyProfile-56')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="股票代號：8341">{{Lang::get('sunnyfriend.CompanyProfile-57')}}</td>
                                    <td data-th="產業類別：其他">{{Lang::get('sunnyfriend.CompanyProfile-58')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="股票代號：8341">{{Lang::get('sunnyfriend.CompanyProfile-59')}}</td>
                                    <td data-th="產業類別：其他">{{Lang::get('sunnyfriend.CompanyProfile-60')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="股票代號：8341">{{Lang::get('sunnyfriend.CompanyProfile-61')}}</td>
                                    <td data-th="產業類別：其他">{{Lang::get('sunnyfriend.CompanyProfile-62')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="股票代號：8341">{{Lang::get('sunnyfriend.CompanyProfile-63')}}</td>
                                    <td data-th="產業類別：其他">{{Lang::get('sunnyfriend.CompanyProfile-64')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="股票代號：8341">{{Lang::get('sunnyfriend.CompanyProfile-65')}}</td>
                                    <td data-th="產業類別：其他">{{Lang::get('sunnyfriend.CompanyProfile-66')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="股票代號：8341">{{Lang::get('sunnyfriend.CompanyProfile-67')}}</td>
                                    <td data-th="產業類別：其他">{{Lang::get('sunnyfriend.CompanyProfile-68')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="股票代號：8341">{{Lang::get('sunnyfriend.CompanyProfile-69')}}</td>
                                    <td data-th="產業類別：其他">{{Lang::get('sunnyfriend.CompanyProfile-70')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="股票代號：8341">{{Lang::get('sunnyfriend.CompanyProfile-71')}}</td>
                                    <td data-th="產業類別：其他">{{Lang::get('sunnyfriend.CompanyProfile-72')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="股票代號：8341">{{Lang::get('sunnyfriend.CompanyProfile-73')}}</td>
                                    <td data-th="產業類別：其他">{{Lang::get('sunnyfriend.CompanyProfile-74')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="股票代號：8341">{{Lang::get('sunnyfriend.CompanyProfile-75')}}</td>
                                    <td data-th="產業類別：其他">{{Lang::get('sunnyfriend.CompanyProfile-76')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="股票代號：8341">{{Lang::get('sunnyfriend.CompanyProfile-77')}}</td>
                                    <td data-th="產業類別：其他">{{Lang::get('sunnyfriend.CompanyProfile-78')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="股票代號：8341">{{Lang::get('sunnyfriend.CompanyProfile-79')}}</td>
                                    <td data-th="產業類別：其他">{{Lang::get('sunnyfriend.CompanyProfile-80')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="股票代號：8341">{{Lang::get('sunnyfriend.CompanyProfile-81')}}</td>
                                    <td data-th="產業類別：其他">{{Lang::get('sunnyfriend.CompanyProfile-82')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="股票代號：8341">{{Lang::get('sunnyfriend.CompanyProfile-83')}}</td>
                                    <td data-th="產業類別：其他">{{Lang::get('sunnyfriend.CompanyProfile-84')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="股票代號：8341">{{Lang::get('sunnyfriend.CompanyProfile-85')}}</td>
                                    <td data-th="產業類別：其他">{{Lang::get('sunnyfriend.CompanyProfile-86')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="股票代號：8341">{{Lang::get('sunnyfriend.CompanyProfile-87')}}</td>
                                    <td data-th="產業類別：其他">{{Lang::get('sunnyfriend.CompanyProfile-88')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="股票代號：8341">{{Lang::get('sunnyfriend.CompanyProfile-89')}}</td>
                                    <td data-th="產業類別：其他">{{Lang::get('sunnyfriend.CompanyProfile-90')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="股票代號：8341">{{Lang::get('sunnyfriend.CompanyProfile-91')}}</td>
                                    <td data-th="產業類別：其他">{{Lang::get('sunnyfriend.CompanyProfile-92')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="股票代號：8341">{{Lang::get('sunnyfriend.CompanyProfile-93')}}</td>
                                    <td data-th="產業類別：其他">{{Lang::get('sunnyfriend.CompanyProfile-94')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="股票代號：8341">{{Lang::get('sunnyfriend.CompanyProfile-95')}}</td>
                                    <td data-th="產業類別：其他">{{Lang::get('sunnyfriend.CompanyProfile-96')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="股票代號：8341">{{Lang::get('sunnyfriend.CompanyProfile-97')}}</td>
                                    <td data-th="產業類別：其他">{{Lang::get('sunnyfriend.CompanyProfile-98')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="股票代號：8341">{{Lang::get('sunnyfriend.CompanyProfile-99')}}</td>
                                    <td data-th="產業類別：其他">{{Lang::get('sunnyfriend.CompanyProfile-100')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="股票代號：8341">{{Lang::get('sunnyfriend.CompanyProfile-101')}}</td>
                                    <td data-th="產業類別：其他">{{Lang::get('sunnyfriend.CompanyProfile-102')}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection