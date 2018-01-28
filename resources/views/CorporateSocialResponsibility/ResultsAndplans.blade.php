@extends('Layouts/app')

@section('content')
    <div class="bannerArea b-box  wow fadeInDown" data-wow-delay="0.5s ">
        <img class="img-responsive" src="../resources/assets/images/CorporateSocialResponsibility/CSR_banner.jpg">
        <div class="titleBox clearfix">
            <h2>{{Lang::get('sunnyfriend.CorporateSocialResponsibility')}}</h2>
        </div>
    </div>
    <div class="wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="breads">
                    <a href="../index.html">{{Lang::get('sunnyfriend.Home')}}</a>
                    <span>></span>
                    <span>{{Lang::get('sunnyfriend.CorporateSocialResponsibility')}}</span>
                    <span>></span>
                    <b>{{Lang::get('sunnyfriend.ResultsAndplans')}}</b>
                </div>
            </div>
        </div>
    </div>
    <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h3>{{Lang::get('sunnyfriend.ResultsAndplans')}}<div class="titleline"></div></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h4>{{Lang::get('sunnyfriend.ResultsAndplans-1')}}</h4>
                    <h5>{{Lang::get('sunnyfriend.ResultsAndplans-2')}}</br></h5>
                    <p style="color:#009943">{{Lang::get('sunnyfriend.ResultsAndplans-3')}}</p>
                    <p>{{Lang::get('sunnyfriend.ResultsAndplans-4')}}</p>
                    <p style="color:#009943">{{Lang::get('sunnyfriend.ResultsAndplans-5')}}</p>
                    <p>{{Lang::get('sunnyfriend.ResultsAndplans-6')}}</p>
                    <p style="color:#009943">{{Lang::get('sunnyfriend.ResultsAndplans-7')}}</p>
                    <p>{{Lang::get('sunnyfriend.ResultsAndplans-8')}}</p>
                    <p style="color:#009943">{{Lang::get('sunnyfriend.ResultsAndplans-9')}}</p>
                    <p>{{Lang::get('sunnyfriend.ResultsAndplans-10')}}</p>
                    <p style="color:#009943">{{Lang::get('sunnyfriend.ResultsAndplans-11')}}</p>
                    <p>{{Lang::get('sunnyfriend.ResultsAndplans-12')}}</p>
                    <p style="color:#009943">{{Lang::get('sunnyfriend.ResultsAndplans-13')}}</p>
                    <p>{{Lang::get('sunnyfriend.ResultsAndplans-14')}}</p>
                    <center>
                    <h4>{{Lang::get('sunnyfriend.ResultsAndplans-15')}}</h4>
                        <div class="table-responsive dragscroll">
                            <table class="table table2" style="text-align: center;">
                                <tr >
                                    <th ></th>
                                    <th style="text-align: center;">{{Lang::get('sunnyfriend.ResultsAndplans-16')}}</th>
                                    <th style="text-align: center;">{{Lang::get('sunnyfriend.ResultsAndplans-17')}}</th>
                                    <th style="text-align: center;">{{Lang::get('sunnyfriend.ResultsAndplans-18')}}</th>
                                    <th style="text-align: center;">{{Lang::get('sunnyfriend.ResultsAndplans-19')}}</th>
                                    <th style="text-align: center;">{{Lang::get('sunnyfriend.ResultsAndplans-20')}}</th>
                                </tr>
                                <tr>
                                    <td data-th="">{{Lang::get('sunnyfriend.ResultsAndplans-21')}}</td>
                                    <td data-th="急難救助（人）">{{Lang::get('sunnyfriend.ResultsAndplans-22')}}</td>
                                    <td data-th="喪葬補助（人）">{{Lang::get('sunnyfriend.ResultsAndplans-23')}}</td>
                                    <td data-th="冬令救濟（人）">{{Lang::get('sunnyfriend.ResultsAndplans-24')}}</td>
                                    <td data-th="獎助學金（人）">{{Lang::get('sunnyfriend.ResultsAndplans-25')}}</td>
                                    <td data-th="車燈（人）">{{Lang::get('sunnyfriend.ResultsAndplans-26')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="">{{Lang::get('sunnyfriend.ResultsAndplans-27')}}</td>
                                    <td data-th="急難救助（人）">{{Lang::get('sunnyfriend.ResultsAndplans-28')}}</td>
                                    <td data-th="喪葬補助（人）">{{Lang::get('sunnyfriend.ResultsAndplans-29')}}</td>
                                    <td data-th="冬令救濟（人）">{{Lang::get('sunnyfriend.ResultsAndplans-30')}}</td>
                                    <td data-th="獎助學金（人）">{{Lang::get('sunnyfriend.ResultsAndplans-31')}}</td>
                                    <td data-th="車燈（人）">{{Lang::get('sunnyfriend.ResultsAndplans-32')}}</td>
                                </tr>
                                <tr>
                                    <td data-th="">{{Lang::get('sunnyfriend.ResultsAndplans-33')}}</td>
                                    <td data-th="急難救助（人）">{{Lang::get('sunnyfriend.ResultsAndplans-34')}}</td>
                                    <td data-th="喪葬補助（人）">{{Lang::get('sunnyfriend.ResultsAndplans-35')}}</td>
                                    <td data-th="冬令救濟（人）">{{Lang::get('sunnyfriend.ResultsAndplans-36')}}</td>
                                    <td data-th="獎助學金（人）">{{Lang::get('sunnyfriend.ResultsAndplans-37')}}</td>
                                    <td data-th="車燈（人）">{{Lang::get('sunnyfriend.ResultsAndplans-38')}}</td>
                                </tr>
                            </table>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <div class="back3 back2 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <h4>{{Lang::get('sunnyfriend.ResultsAndplans-39')}}</h4>
                    <p>{{Lang::get('sunnyfriend.ResultsAndplans-40')}}</p>
                </div>
                <div class="col-md-6 col-sm-6 col-md-offset-1">
                    <img class="img-responsive" src="../resources/assets/images/CorporateSocialResponsibility/022.png">
                </div>
            </div>
            </br>
            </br>
            <div class="row masonry-container">
                <div class="col-md-4 col-sm-4 item">
                    <div class="thumbnail csrshadow">
                        <div class="caption">
                            <p style="color:#009943">{{Lang::get('sunnyfriend.ResultsAndplans-41')}}</p>
                            <p>{{Lang::get('sunnyfriend.ResultsAndplans-42')}}</p>
                        </div>
                    </div>
                </div>
                <!--/.item  -->
                <div class="col-md-4 col-sm-4 item">
                    <div class="thumbnail csrshadow">
                        <div class="caption">
                            <p style="color:#009943">{{Lang::get('sunnyfriend.ResultsAndplans-43')}}</p>
                            <p>{{Lang::get('sunnyfriend.ResultsAndplans-44')}}</br>
                                </br>{{Lang::get('sunnyfriend.ResultsAndplans-45')}}</p>
                        </div>
                    </div>
                </div>
                <!--/.item  -->
                <div class="col-md-4 col-sm-4 item">
                    <div class="thumbnail csrshadow">
                        <div class="caption">
                            <p style="color:#009943">{{Lang::get('sunnyfriend.ResultsAndplans-46')}}</p>
                            <p>{{Lang::get('sunnyfriend.ResultsAndplans-47')}}</p>
                        </div>
                    </div>
                </div>
                <!--/.item  -->
                <div class="col-md-4 col-sm-4 item">
                    <div class="thumbnail csrshadow">
                        <div class="caption">
                            <p style="color:#009943">{{Lang::get('sunnyfriend.ResultsAndplans-48')}}</p>
                            <p>{{Lang::get('sunnyfriend.ResultsAndplans-49')}}</p>
                        </div>
                    </div>
                </div>
                <!--/.item  -->
                <div class="col-md-4 col-sm-4 item">
                    <div class="thumbnail csrshadow">
                        <div class="caption">
                            <p style="color:#009943">{{Lang::get('sunnyfriend.ResultsAndplans-50')}}</p>
                            <p>{{Lang::get('sunnyfriend.ResultsAndplans-51')}}</p>
                        </div>
                    </div>
                </div>
                <!--/.item  -->
                <div class="col-md-4 col-sm-4 item">
                    <div class="thumbnail csrshadow">
                        <div class="caption">
                            <p style="color:#009943">{{Lang::get('sunnyfriend.ResultsAndplans-52')}}</p>
                            <p>{{Lang::get('sunnyfriend.ResultsAndplans-53')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </div>
    <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h4>{{Lang::get('sunnyfriend.ResultsAndplans-54')}}</h4>
                    <p>{{Lang::get('sunnyfriend.ResultsAndplans-55')}}</p>
                </div>
            </div>
            <div class="back99"> </div>
            <div class="text-center">
                <a href="CSRReport.html"><div class="btn btn-default ">{{Lang::get('sunnyfriend.ResultsAndplans-56')}}</div></a>
            </div>
        </div>
    </div>
@endsection