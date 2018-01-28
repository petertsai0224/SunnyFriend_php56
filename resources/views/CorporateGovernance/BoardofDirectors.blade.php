@extends('Layouts/app')

@section('content')
    <!--banner-->
    <div class="bannerArea b-box  wow fadeInDown" data-wow-delay="0.5s ">
        <img class="img-responsive" src="../assets/images/BoardofDirectors/公司治理_banner.jpg">
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
                    <b>{{Lang::get('sunnyfriend.BoardofDirectors')}}</b>
                </div>
            </div>
        </div>
    </div>
    <!--公司治理-->
    <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <h3>{{Lang::get('sunnyfriend.BoardofDirectors')}}<div class="titleline"></div></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <p>{{Lang::get('sunnyfriend.BoardofDirectors-0')}}
                        </br>
                        </br>
                    </p>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="table-responsive dragscroll">
                        <table class="table table2">
                            <thead>
                                <tr  style="background-color: #AACD03;text-align: center;">
                                    <td class="middle" rowspan="2">{{Lang::get('sunnyfriend.BoardofDirectors-1')}}</td>
                                    <td class="middle" rowspan="2">{{Lang::get('sunnyfriend.BoardofDirectors-2')}}</td>
                                    <td class="middle" rowspan="2">{{Lang::get('sunnyfriend.BoardofDirectors-3')}}</td>
                                    <td class="middle" class="middle" colspan="2">{{Lang::get('sunnyfriend.BoardofDirectors-4')}}</td>
                                    <td class="middle" colspan="2">{{Lang::get('sunnyfriend.BoardofDirectors-5')}}<br>{{Lang::get('sunnyfriend.BoardofDirectors-5.1')}}</td>
                                    <td style="text-align: left;" class="middle" rowspan="2">{{Lang::get('sunnyfriend.BoardofDirectors-6')}}</td>
                                </tr>
                                <tr style="background-color: #AACD03;text-align: center;">
                                    <td class="middle" >{{Lang::get('sunnyfriend.BoardofDirectors-7')}}</td>
                                    <td class="middle" >{{Lang::get('sunnyfriend.BoardofDirectors-8')}}</td>
                                    <td class="middle" >{{Lang::get('sunnyfriend.BoardofDirectors-9')}}</td>
                                    <td class="middle" >{{Lang::get('sunnyfriend.BoardofDirectors-10')}}</td>
                                </tr>
                            </thead>
                            <tbody style="text-align: center;" >
                                <tr>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-11')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-12')}}</br>{{Lang::get('sunnyfriend.BoardofDirectors-13')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-14')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-15')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-16')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-17')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-18')}}</td>
                                    <td style="text-align: left;" >{{Lang::get('sunnyfriend.BoardofDirectors-19')}}</br>{{Lang::get('sunnyfriend.BoardofDirectors-20')}}</br>{{Lang::get('sunnyfriend.BoardofDirectors-21')}}</br>{{Lang::get('sunnyfriend.BoardofDirectors-22')}}</br>{{Lang::get('sunnyfriend.BoardofDirectors-23')}}</br>{{Lang::get('sunnyfriend.BoardofDirectors-24')}}</br>{{Lang::get('sunnyfriend.BoardofDirectors-25')}}</br>{{Lang::get('sunnyfriend.BoardofDirectors-26')}}</td>
                                </tr>
                                <tr>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-27')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-28')}}</br>{{Lang::get('sunnyfriend.BoardofDirectors-29')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-30')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-31')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-32')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-33')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-34')}}</td>
                                    <td style="text-align: left;" >{{Lang::get('sunnyfriend.BoardofDirectors-35')}}</br>{{Lang::get('sunnyfriend.BoardofDirectors-36')}}</br>{{Lang::get('sunnyfriend.BoardofDirectors-37')}}</td>
                                </tr>
                                <tr>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-38')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-39')}}</br>{{Lang::get('sunnyfriend.BoardofDirectors-40')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-41')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-42')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-43')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-44')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-45')}}</td>
                                    <td style="text-align: left;" >{{Lang::get('sunnyfriend.BoardofDirectors-46')}}</td>
                                </tr>
                                <tr>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-47')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-48')}}</br>{{Lang::get('sunnyfriend.BoardofDirectors-49')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-50')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-51')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-52')}}</td>
                                        <td>{{Lang::get('sunnyfriend.BoardofDirectors-53')}}</td>
                                        <td>{{Lang::get('sunnyfriend.BoardofDirectors-54')}}</td>
                                        <td style="text-align: left;" >{{Lang::get('sunnyfriend.BoardofDirectors-55')}}</br>{{Lang::get('sunnyfriend.BoardofDirectors-56')}}</br>{{Lang::get('sunnyfriend.BoardofDirectors-57')}}</td>
                                </tr>
                                <tr>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-58')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-59')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-60')}}</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td style="text-align: left;" >{{Lang::get('sunnyfriend.BoardofDirectors-61')}}</td>
                                </tr>
                                <tr>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-62')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-63')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-64')}}</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td style="text-align: left;" >{{Lang::get('sunnyfriend.BoardofDirectors-65')}}</br>
                                        {{Lang::get('sunnyfriend.BoardofDirectors-66')}}</br>
                                        {{Lang::get('sunnyfriend.BoardofDirectors-67')}}</br>
                                        {{Lang::get('sunnyfriend.BoardofDirectors-68')}}</br>
                                        {{Lang::get('sunnyfriend.BoardofDirectors-69')}}</br>
                                        {{Lang::get('sunnyfriend.BoardofDirectors-70')}}</br>
                                        {{Lang::get('sunnyfriend.BoardofDirectors-71')}}</br>
                                        {{Lang::get('sunnyfriend.BoardofDirectors-72')}}</br>
                                        {{Lang::get('sunnyfriend.BoardofDirectors-73')}}</br>
                                        {{Lang::get('sunnyfriend.BoardofDirectors-74')}}</br>
                                        {{Lang::get('sunnyfriend.BoardofDirectors-75')}}</br>
                                        {{Lang::get('sunnyfriend.BoardofDirectors-76')}}</br>
                                        {{Lang::get('sunnyfriend.BoardofDirectors-77')}}</td>
                                </tr>
                                <tr>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-78')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-78-2')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-79')}}</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td style="text-align: left;" >{{Lang::get('sunnyfriend.BoardofDirectors-80')}}</br>{{Lang::get('sunnyfriend.BoardofDirectors-81')}}</br>
                                        {{Lang::get('sunnyfriend.BoardofDirectors-82')}}</br>
                                        {{Lang::get('sunnyfriend.BoardofDirectors-83')}}</br>
                                        {{Lang::get('sunnyfriend.BoardofDirectors-84')}}</br>
                                        {{Lang::get('sunnyfriend.BoardofDirectors-85')}}</br>
                                        {{Lang::get('sunnyfriend.BoardofDirectors-86')}}</td>
                                </tr>
                                <tr>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-87')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-88')}}</br>
                                        {{Lang::get('sunnyfriend.BoardofDirectors-89')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-90')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-91')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-92')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-93')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-94')}}</td>
                                    <td style="text-align: left;" >{{Lang::get('sunnyfriend.BoardofDirectors-95')}}</br>
                                        {{Lang::get('sunnyfriend.BoardofDirectors-96')}}</br>
                                        {{Lang::get('sunnyfriend.BoardofDirectors-97')}}</td>
                                </tr>
                                <tr>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-98')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-99')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-100')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-101')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-102')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-103')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-104')}}</td>
                                    <td style="text-align: left;" >{{Lang::get('sunnyfriend.BoardofDirectors-105')}}</br>
                                        {{Lang::get('sunnyfriend.BoardofDirectors-106')}}</td>
                                </tr>
                                <tr>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-107')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-108')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-109')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-110')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-111')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-112')}}</td>
                                    <td>{{Lang::get('sunnyfriend.BoardofDirectors-113')}}</td>
                                    <td style="text-align: left;" >{{Lang::get('sunnyfriend.BoardofDirectors-114')}}</br>
                                        {{Lang::get('sunnyfriend.BoardofDirectors-115')}}</br>
                                        {{Lang::get('sunnyfriend.BoardofDirectors-116')}}</br>
                                        {{Lang::get('sunnyfriend.BoardofDirectors-117')}}</br>
                                        {{Lang::get('sunnyfriend.BoardofDirectors-118')}}</br>
                                        {{Lang::get('sunnyfriend.BoardofDirectors-119')}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection