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
                    <b>{{Lang::get('sunnyfriend.SMP')}}</b>
                </div>
            </div>
        </div>
    </div>
    <!--公司治理-->
    <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <h3>{{Lang::get('sunnyfriend.SMP')}}<div class="titleline"></div></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h4><i class="fa fa-users" aria-hidden="true">&ensp; </i>{{Lang::get('sunnyfriend.SMP-1')}}</h4>
                    <p>{{Lang::get('sunnyfriend.SMP-2')}}</br></p>
                    <h4>{{Lang::get('sunnyfriend.SMP-3')}}</h4>
                    <center>
                        <div class="table-responsive dragscroll">
                            <table class="table table2">
                                <tr >
                                    <th >{{Lang::get('sunnyfriend.SMP-4')}}</th>
                                    <th >{{Lang::get('sunnyfriend.SMP-5')}}</th>
                                    <th >{{Lang::get('sunnyfriend.SMP-6')}}</th>
                                </tr>
                                <tr>
                                    <td data-th="年度">{{Lang::get('sunnyfriend.SMP-7')}}</td>
                                    <td data-th="重點期程">{{Lang::get('sunnyfriend.SMP-8')}}</td>
                                    <td data-th="計劃逐年推動之相關措施">{{Lang::get('sunnyfriend.SMP-9')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="年度">{{Lang::get('sunnyfriend.SMP-10')}}</td>
                                    <td data-th="重點期程">{{Lang::get('sunnyfriend.SMP-11')}}</td>
                                    <td data-th="計劃逐年推動之相關措施">{{Lang::get('sunnyfriend.SMP-12')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="年度">{{Lang::get('sunnyfriend.SMP-13')}}</td>
                                    <td data-th="重點期程">{{Lang::get('sunnyfriend.SMP-14')}}</td>
                                    <td data-th="計劃逐年推動之相關措施">{{Lang::get('sunnyfriend.SMP-15')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="年度">{{Lang::get('sunnyfriend.SMP-16')}}</td>
                                    <td data-th="重點期程">{{Lang::get('sunnyfriend.SMP-17')}}</td>
                                    <td data-th="計劃逐年推動之相關措施">{{Lang::get('sunnyfriend.SMP-18')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="年度">{{Lang::get('sunnyfriend.SMP-19')}}</td>
                                    <td data-th="重點期程">{{Lang::get('sunnyfriend.SMP-20')}}</td>
                                    <td data-th="計劃逐年推動之相關措施">{{Lang::get('sunnyfriend.SMP-21')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="年度">{{Lang::get('sunnyfriend.SMP-22')}}</td>
                                    <td data-th="重點期程">{{Lang::get('sunnyfriend.SMP-23')}}</td>
                                    <td data-th="計劃逐年推動之相關措施">{{Lang::get('sunnyfriend.SMP-24')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="年度">{{Lang::get('sunnyfriend.SMP-25')}}</td>
                                    <td data-th="重點期程">{{Lang::get('sunnyfriend.SMP-26')}}</td>
                                    <td data-th="計劃逐年推動之相關措施">{{Lang::get('sunnyfriend.SMP-27')}}</td>
                                </tr>
                            </table>
                        </div>
                    </center>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <p>{{Lang::get('sunnyfriend.SMP-28')}}</br></p>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                <h4 style="color:#009943;text-align: center">{{Lang::get('sunnyfriend.SMP-29')}}</br></br></h4>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="stbox">
                <div class="Sticon1"></div>
                <h5>{{Lang::get('sunnyfriend.SMP-30')}}</br>{{Lang::get('sunnyfriend.SMP-31')}}</h5>
                </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="stbox">
                    <div class="Sticon2"></div>
                <h5>{{Lang::get('sunnyfriend.SMP-32')}}</br>{{Lang::get('sunnyfriend.SMP-33')}}</h5>
                </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="stbox">
                    <div class="Sticon3"></div>  
                <h5>{{Lang::get('sunnyfriend.SMP-34')}}</br>{{Lang::get('sunnyfriend.SMP-35')}}</h5>
                </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="stbox">
                    <div class="Sticon4"></div>    
                <h5>{{Lang::get('sunnyfriend.SMP-36')}}</br>{{Lang::get('sunnyfriend.SMP-37')}}</h5></br></br>
                </div>
                </div>
                    <p>{{Lang::get('sunnyfriend.SMP-38')}}</p>
            </div>
        </div>
            <div class="back99"> </div>
            <div class="text-center">
                <a href="../CorporateSocialResponsibility/CSRReport.html"><div class="btn btn-default ">了解更多－企業社會責任報告書</div></a>
            </div>
    </div>
    </div>
@endsection