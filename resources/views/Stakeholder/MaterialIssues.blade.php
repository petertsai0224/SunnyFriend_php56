@extends('Layouts/app')

@section('content')
    <!--banner-->
    <div class="bannerArea b-box  wow fadeInDown" data-wow-delay="0.5s ">
        <img class="img-responsive" src="../resources/assets/images/stackholder/Business People Meeting Discussion Working Concept.jpg">
        <div class="titleBox clearfix">
            <h2>{{Lang::get('sunnyfriend.Stackholder')}}</h2>
        </div>
    </div>
    <div class="wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="breads">
                    <a href="../index.php">{{Lang::get('sunnyfriend.Home')}}</a>
                    <span>></span>
                    <span>{{Lang::get('sunnyfriend.Stackholder')}}</span>
                    <span>></span>
                    <b>{{Lang::get('sunnyfriend.MaterialIssues')}}</b>
                </div>
            </div>
        </div>
    </div>
    <!--公司治理-->
    <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h3>{{Lang::get('sunnyfriend.MaterialIssues')}}<div class="titleline"></div></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <p>{{Lang::get('sunnyfriend.MaterialIssues-1')}}
                        </br>
                        </br>
                    </p>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <center>
                        <div class="table-responsive dragscroll">
                            <table class="table table2">
                                <tr>
                                    <th >{{Lang::get('sunnyfriend.MaterialIssues-2')}}</th>
                                    <th >{{Lang::get('sunnyfriend.MaterialIssues-3')}}</th>
                                    <th >{{Lang::get('sunnyfriend.MaterialIssues-4')}}</th>
                                    <th >{{Lang::get('sunnyfriend.MaterialIssues-5')}}</th>
                                </tr>
                                <tr>
                                    <td data-th="利害關係人">{{Lang::get('sunnyfriend.MaterialIssues-6')}}</td>
                                    <td data-th="關切議題">{{Lang::get('sunnyfriend.MaterialIssues-7')}}</br>
                                        {{Lang::get('sunnyfriend.MaterialIssues-8')}}</br>
                                        {{Lang::get('sunnyfriend.MaterialIssues-9')}}</td>
                                    <td data-th="溝通方式">{{Lang::get('sunnyfriend.MaterialIssues-10')}}</br>
                                        {{Lang::get('sunnyfriend.MaterialIssues-11')}}</br>{{Lang::get('sunnyfriend.MaterialIssues-12')}} </td>
                                    <td data-th="具體措施">{{Lang::get('sunnyfriend.MaterialIssues-13')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="利害關係人">{{Lang::get('sunnyfriend.MaterialIssues-14')}}</td>
                                    <td data-th="關切議題">{{Lang::get('sunnyfriend.MaterialIssues-15')}}</br>
                                        {{Lang::get('sunnyfriend.MaterialIssues-16')}}</br>
                                        {{Lang::get('sunnyfriend.MaterialIssues-17')}}</br>
                                        {{Lang::get('sunnyfriend.MaterialIssues-18')}}</br>
                                        {{Lang::get('sunnyfriend.MaterialIssues-19')}}</td>
                                    <td data-th="溝通方式">{{Lang::get('sunnyfriend.MaterialIssues-20')}}</br>
                                        {{Lang::get('sunnyfriend.MaterialIssues-21')}} </td>
                                    <td data-th="具體措施">{{Lang::get('sunnyfriend.MaterialIssues-22')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="利害關係人">{{Lang::get('sunnyfriend.MaterialIssues-23')}}</td>
                                    <td data-th="關切議題">{{Lang::get('sunnyfriend.MaterialIssues-24')}}</br>
                                        {{Lang::get('sunnyfriend.MaterialIssues-25')}}</br>
                                        {{Lang::get('sunnyfriend.MaterialIssues-26')}} </td>
                                    <td data-th="溝通方式">{{Lang::get('sunnyfriend.MaterialIssues-27')}}</br>
                                        {{Lang::get('sunnyfriend.MaterialIssues-28')}} </td>
                                    <td data-th="具體措施">{{Lang::get('sunnyfriend.MaterialIssues-29')}}</br>{{Lang::get('sunnyfriend.MaterialIssues-30')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="利害關係人">{{Lang::get('sunnyfriend.MaterialIssues-31')}}</td>
                                    <td data-th="關切議題">{{Lang::get('sunnyfriend.MaterialIssues-32')}}</br>
                                        {{Lang::get('sunnyfriend.MaterialIssues-33')}}</br>
                                        {{Lang::get('sunnyfriend.MaterialIssues-34')}} </td>
                                    <td data-th="溝通方式">{{Lang::get('sunnyfriend.MaterialIssues-35')}}</br>
                                        {{Lang::get('sunnyfriend.MaterialIssues-36')}} </td>
                                    <td data-th="具體措施">{{Lang::get('sunnyfriend.MaterialIssues-37')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="利害關係人">{{Lang::get('sunnyfriend.MaterialIssues-38')}}</td>
                                    <td data-th="關切議題">{{Lang::get('sunnyfriend.MaterialIssues-39')}}</br>
                                        {{Lang::get('sunnyfriend.MaterialIssues-40')}}</br>
                                        {{Lang::get('sunnyfriend.MaterialIssues-41')}}</br>
                                        {{Lang::get('sunnyfriend.MaterialIssues-42')}} </td>
                                    <td data-th="溝通方式">{{Lang::get('sunnyfriend.MaterialIssues-43')}}</br>
                                        {{Lang::get('sunnyfriend.MaterialIssues-44')}} </td>
                                    <td data-th="具體措施">{{Lang::get('sunnyfriend.MaterialIssues-45')}}</br>{{Lang::get('sunnyfriend.MaterialIssues-46')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="利害關係人">{{Lang::get('sunnyfriend.MaterialIssues-47')}} </td>
                                    <td data-th="關切議題">{{Lang::get('sunnyfriend.MaterialIssues-48')}}</br>
                                        {{Lang::get('sunnyfriend.MaterialIssues-49')}}</td>
                                    <td data-th="溝通方式">{{Lang::get('sunnyfriend.MaterialIssues-50')}}</br>
                                        {{Lang::get('sunnyfriend.MaterialIssues-51')}}</br>{{Lang::get('sunnyfriend.MaterialIssues-52')}} </td>
                                    <td data-th="具體措施">{{Lang::get('sunnyfriend.MaterialIssues-53')}}</br>{{Lang::get('sunnyfriend.MaterialIssues-54')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="利害關係人">{{Lang::get('sunnyfriend.MaterialIssues-55')}} </td>
                                    <td data-th="關切議題">{{Lang::get('sunnyfriend.MaterialIssues-56')}}</br>
                                        {{Lang::get('sunnyfriend.MaterialIssues-57')}}</br>
                                        {{Lang::get('sunnyfriend.MaterialIssues-58')}}</br>
                                        {{Lang::get('sunnyfriend.MaterialIssues-59')}} </td>
                                    <td data-th="溝通方式">{{Lang::get('sunnyfriend.MaterialIssues-60')}}</br>
                                        {{Lang::get('sunnyfriend.MaterialIssues-61')}}</br>
                                        {{Lang::get('sunnyfriend.MaterialIssues-62')}} </td>
                                    <td data-th="具體措施">{{Lang::get('sunnyfriend.MaterialIssues-63')}}</br>{{Lang::get('sunnyfriend.MaterialIssues-64')}}</td>
                                </tr>
                            </table>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
@endsection