@extends('Layouts/app')

@section('content')
    <!--banner-->
    <div class="bannerArea b-box  wow fadeInDown" data-wow-delay="0.5s ">
        <img class="img-responsive" src="../assets/images/stackholder/Business People Meeting Discussion Working Concept.jpg">
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
                    <b>{{Lang::get('sunnyfriend.GrievanceMachinery')}}</b>
                </div>
            </div>
        </div>
    </div>
    <!--公司治理-->
    <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <h3>{{Lang::get('sunnyfriend.GrievanceMachinery')}}<div class="titleline"></div></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <p>{{Lang::get('sunnyfriend.GrievanceMachinery-1')}}
                        </br>
                        </br>
                    </p>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h5><i class="fa fa-users" aria-hidden="true">&ensp; </i>{{Lang::get('sunnyfriend.GrievanceMachinery-2')}}</h5>
                    <center>
                        <div class="table-responsive dragscroll">
                            <table class="table table2">
                                <tr>
                                    <th>{{Lang::get('sunnyfriend.GrievanceMachinery-3')}}</th>
                                    <th>{{Lang::get('sunnyfriend.GrievanceMachinery-4')}}</th>
                                    <th>{{Lang::get('sunnyfriend.GrievanceMachinery-5')}}</th>
                                </tr>
                                <tr>
                                    <td data-th="利害關係人">{{Lang::get('sunnyfriend.GrievanceMachinery-6')}}</td>
                                    <td data-th="溝通方式">{{Lang::get('sunnyfriend.GrievanceMachinery-7')}}</br>
                                        {{Lang::get('sunnyfriend.GrievanceMachinery-8')}}</br>
                                        {{Lang::get('sunnyfriend.GrievanceMachinery-9')}}
                                    </td>
                                    <td data-th="申訴管道">{{Lang::get('sunnyfriend.GrievanceMachinery-10')}}</br>
                                        {{Lang::get('sunnyfriend.GrievanceMachinery-11')}}</br>
                                        {{Lang::get('sunnyfriend.GrievanceMachinery-12')}}</br>
                                        {{Lang::get('sunnyfriend.GrievanceMachinery-13')}}
                                    </td>
                                </tr>
                                <tr>
                                    <td data-th="利害關係人">{{Lang::get('sunnyfriend.GrievanceMachinery-14')}}</td>
                                    <td data-th="溝通方式">{{Lang::get('sunnyfriend.GrievanceMachinery-15')}}</br>
                                        {{Lang::get('sunnyfriend.GrievanceMachinery-16')}}
                                    </td>
                                    <td data-th="申訴管道">{{Lang::get('sunnyfriend.GrievanceMachinery-17')}}</br>
                                        {{Lang::get('sunnyfriend.GrievanceMachinery-18')}}</br>
                                        {{Lang::get('sunnyfriend.GrievanceMachinery-19')}}
                                    </td>
                                </tr>
                                <tr>
                                    <td data-th="利害關係人">{{Lang::get('sunnyfriend.GrievanceMachinery-20')}}</td>
                                    <td data-th="溝通方式">{{Lang::get('sunnyfriend.GrievanceMachinery-21')}}</br>
                                        {{Lang::get('sunnyfriend.GrievanceMachinery-22')}}
                                    </td>
                                    <td data-th="申訴管道">{{Lang::get('sunnyfriend.GrievanceMachinery-23')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="利害關係人">{{Lang::get('sunnyfriend.GrievanceMachinery-24')}}</td>
                                    <td data-th="溝通方式">{{Lang::get('sunnyfriend.GrievanceMachinery-25')}}</br>
                                        {{Lang::get('sunnyfriend.GrievanceMachinery-26')}}
                                    </td>
                                    <td data-th="申訴管道">{{Lang::get('sunnyfriend.GrievanceMachinery-27')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="利害關係人">{{Lang::get('sunnyfriend.GrievanceMachinery-28')}}</td>
                                    <td data-th="溝通方式">{{Lang::get('sunnyfriend.GrievanceMachinery-29')}}</br>
                                        {{Lang::get('sunnyfriend.GrievanceMachinery-30')}}
                                    </td>
                                    <td data-th="申訴管道">{{Lang::get('sunnyfriend.GrievanceMachinery-31')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="利害關係人">{{Lang::get('sunnyfriend.GrievanceMachinery-32')}}</td>
                                    <td data-th="溝通方式">{{Lang::get('sunnyfriend.GrievanceMachinery-33')}}</br>
                                        {{Lang::get('sunnyfriend.GrievanceMachinery-34')}}</br>
                                        {{Lang::get('sunnyfriend.GrievanceMachinery-35')}}
                                    </td>
                                    <td data-th="申訴管道">{{Lang::get('sunnyfriend.GrievanceMachinery-36')}}</td>
                                </tr>
                            </table>
                        </div>
                </center>
            </div>
        </div>
    </div>
    </div>
@endsection