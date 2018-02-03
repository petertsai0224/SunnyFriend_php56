<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>日友環保科技股份有限公司</title>
    <!-- Bootstrap -->
    <link href="resources/css/bootstrap.min.css" rel="stylesheet">
    <link href="resources/css/owl.carousel.min.css" rel="stylesheet">
    <link href="resources/css/owl.theme.default.css" rel="stylesheet">
    <link href="resources/css/font-awesome.min.css" rel="stylesheet">
    <link href="resources/css/animate.css" rel="stylesheet">
    <link href="resources/css/ihover2.css" rel="stylesheet">
    <link href="resources/css/sunfriend2.css" rel="stylesheet">
    <link href="resources/css/bootstrap-dropdownhover.min.css" rel="stylesheet">
    <!--思源黑體 -->
    <style type="text/css">
    @import url(http://fonts.googleapis.com/earlyaccess/notosanstc.css);
    * {
        font-family: 'Noto Sans TC', sans-serif;
    }
    </style>
    <script src="resources/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="resources/js/owl.carousel.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,600|Raleway:600,300|Josefin+Slab:400,700,600italic,600,400italic' rel='stylesheet' type='text/css'>

      <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="body">
    <!--HEADER START-->
    <header>
        <div class="navbar-fixed-top wow fadeInDown">
            <nav class="navbar navbar-default ">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="index.php" class="navbar-brand"><img alt="Brand" class="img-responsive" style="width:100%" src="resources/assets/images/LOGO-01-01.svg"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                    
                    @if((Config::get('app.locale'))=="tw")
                        <div class="lan"><i class=" wow fa fa-globe" aria-hidden="true"></i><a href="{{ url('/lang/set/en') }}" >ENGLISH</a></div>
                    @else  
                        <div class="lan"><i class=" wow fa fa-globe" aria-hidden="true"></i><a href="{{ url('/lang/set/tw') }}" >CHINESE</a></div>
                    @endif
                        <ul class="nav navbar-nav navbar-right" data-hover="dropdown" data-animations="fadeInUp" data-dropdown-in="fadeInUp" data-dropdown-out="fadeOutDown">
                            <li class=" dropdown ">
                                <a href="AboutSF/CompanyProfile" class="dropdown-toggle " data-toggle="dropdown">{{Lang::get('sunnyfriend.Home-1')}}<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu dropdown-menu-left ">
                                    <li><a href="AboutSF/CompanyProfile">{{Lang::get('sunnyfriend.Home-2')}}</a></li>
                                    <li><a href="AboutSF/ServiceAndArea">{{Lang::get('sunnyfriend.Home-3')}}</a></li>
                                    <li><a href="AboutSF/Structure">{{Lang::get('sunnyfriend.Home-4')}}</a></li>
                                    <li><a href="AboutSF/ManagingTeam">{{Lang::get('sunnyfriend.Home-5')}}</a></li>
                                    <li><a href="AboutSF/Organization">{{Lang::get('sunnyfriend.Home-6')}}</a></li>
                                    <li><a href="AboutSF/Shareholding">{{Lang::get('sunnyfriend.Home-7')}}</a></li>
                                    <li><a href="AboutSF/IIC">{{Lang::get('sunnyfriend.Home-8')}}</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                             <a href="News/NewsCenter" class="dropdown-toggle" data-toggle="dropdown">{{Lang::get('sunnyfriend.Home-9')}}<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu dropdown-menu-left ">
                                    <li><a href="News/latestNews">{{Lang::get('sunnyfriend.Home-10')}}</a></li>
                                    <li><a href="News/ImportantNews">{{Lang::get('sunnyfriend.Home-11')}}</a></li>
                                    <li><a href="News/WebsiteLinks">{{Lang::get('sunnyfriend.Home-12')}}</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="CorporateGovernance/GovernancePreface" class="dropdown-toggle" data-toggle="dropdown">{{Lang::get('sunnyfriend.Home-13')}}<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu dropdown-menu-left ">
                                    <li><a href="CorporateGovernance/GovernancePreface">{{Lang::get('sunnyfriend.Home-14')}}</a></li>
                                    <li><a href="CorporateGovernance/Regulations">{{Lang::get('sunnyfriend.Home-15')}}</a></li>
                                    <li><a href="CorporateGovernance/InternalAuditing">{{Lang::get('sunnyfriend.Home-16')}}</a></li>
                                    <li><a href="CorporateGovernance/BoardofDirectors">{{Lang::get('sunnyfriend.Home-17')}}</a></li>
                                    <li><a href="CorporateGovernance/Diversification">{{Lang::get('sunnyfriend.Home-18')}}</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                      <a href="Investor/IFSM" class="dropdown-toggle" data-toggle="dropdown">{{Lang::get('sunnyfriend.Home-19')}}<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu dropdown-menu-left ">
                                    <li><a href="Investor/IFSM">{{Lang::get('sunnyfriend.Home-20')}}</a></li>
                                    <li><a href="Investor/MonthlyRevenue">{{Lang::get('sunnyfriend.Home-21')}}</a></li>
                                    <li><a href="Investor/FinancialInformation">{{Lang::get('sunnyfriend.Home-22')}}</a></li>
                                    <li><a href="Investor/ExchangeLink">{{Lang::get('sunnyfriend.Home-23')}}</a></li>
                                    <li><a href="Investor/DividendPolicy">{{Lang::get('sunnyfriend.Home-24')}}</a></li>
                                    <li><a href="Investor/InvestmentCentre">{{Lang::get('sunnyfriend.Home-25')}}</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="CorporateSocialResponsibility/Preface" class="dropdown-toggle" data-toggle="dropdown">{{Lang::get('sunnyfriend.Home-26')}}<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu dropdown-menu-left ">
                                    <li><a href="CorporateSocialResponsibility/Preface">{{Lang::get('sunnyfriend.Home-27')}}</a></li>
                                    <li><a href="CorporateSocialResponsibility/Policy">{{Lang::get('sunnyfriend.Home-28')}}</a></li>
                                    <li><a href="CorporateSocialResponsibility/ResultsAndplans">{{Lang::get('sunnyfriend.Home-29')}}</a></li>
                                    <li><a href="CorporateSocialResponsibility/CSRReport">{{Lang::get('sunnyfriend.Home-30')}}</a></li>
                                    <li><a href="CorporateSocialResponsibility/VanellusLiterature">{{Lang::get('sunnyfriend.Home-31')}}</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                    <a href="Stakeholder/MaterialIssues" class="dropdown-toggle" data-toggle="dropdown">{{Lang::get('sunnyfriend.Home-32')}}<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="Stakeholder/MaterialIssues">{{Lang::get('sunnyfriend.Home-33')}}</a></li>
                                    <li><a href="Stakeholder/EmployeeBenefits">{{Lang::get('sunnyfriend.Home-34')}}</a></li>
                                    <li><a href="Stakeholder/SMP">{{Lang::get('sunnyfriend.Home-35')}}</a></li>
                                    <li><a href="Stakeholder/GrievanceMachinery">{{Lang::get('sunnyfriend.Home-36')}}</a></li>
                                    <li><a href="Stakeholder/UBGM">{{Lang::get('sunnyfriend.Home-37')}}</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="Environmentalprotection/EnvironmentalUnit" class="dropdown-toggle" data-toggle="dropdown">{{Lang::get('sunnyfriend.Home-38')}}<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="Environmentalprotection/EnvironmentalUnit">{{Lang::get('sunnyfriend.Home-39')}}</a></li>
                                    <li><a href="Environmentalprotection/EnvironmentMonitoring">{{Lang::get('sunnyfriend.Home-40')}}</a></li>
                                    <li><a href="Environmentalprotection/Energysaving">{{Lang::get('sunnyfriend.Home-41')}}</a></li>
                                </ul>
                            </li>
                
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="Gradientline"></div>
        </div>

    </header>
    <!--幻燈片-->
    <div id="myCarousel" class="carousel slide wow fadeInDown" data-ride="carousel" >
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
            <li data-target="#myCarousel" data-slide-to="6"></li>
            <li data-target="#myCarousel" data-slide-to="7"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-caption">
               <h3 class="wow fadeInLeft" data-wow-delay="0.7s">RUENTEX</h3>
                <h1 class="wow fadeInLeft" data-wow-delay="0.7s">新環境創造者</h1>
                <h4 class="wow fadeInLeft" data-wow-delay="0.7s">SUNNY FRIEND ENVIRONMENTAL TECHNOLOGY</h4>
            </div>
            <div class="item active">
                <img src="resources/assets/images/slider/001.jpg" alt="First slide">
                <div class="carousel-caption"></div>
            </div>
            <div class="item">
                <img src="resources/assets/images/slider/002.jpg" alt="Second slide">
                <div class="carousel-caption"></div>
            </div>
            <div class="item">
                <img src="resources/assets/images/slider/003.jpg" alt="Second slide">
                <div class="carousel-caption"></div>
            </div>
            <div class="item">
                <img src="resources/assets/images/slider/004.jpg" alt="Second slide">
                <div class="carousel-caption"></div>
            </div>
            <div class="item">
                <img src="resources/assets/images/slider/005.jpg" alt="Second slide">
                <div class="carousel-caption"></div>
            </div>
            <div class="item">
                <img src="resources/assets/images/slider/006.jpg" alt="Second slide">
                <div class="carousel-caption"></div>
            </div>
            <div class="item">
                <img src="resources/assets/images/slider/007.jpg" alt="Second slide">
                <div class="carousel-caption"></div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
    </div>
    <script>
    $(function() {
        var $item = $('.carousel .item');
        var $wHeight = $(window).height();
        $item.height($wHeight);
        $item.addClass('full-screen');

        $('.carousel img').each(function() {
            var $src = $(this).attr('src');
            var $color = $(this).attr('data-color');
            $(this).parent().css({
                'background-image': 'url(' + $src + ')',
                'background-color': $color
            });
            $(this).remove();
        });

        //單則隱藏控制鈕
        if ($('.carousel .carousel-inner div.item').length < 2) {
            $('.carousel-indicators, .carousel-control').hide();
        }

        //縮放視窗調整視窗高度
        $(window).on('resize', function() {
            $wHeight = $(window).height();
            $item.height($wHeight);
        });

        //輪播秒數與滑入停止
        $('.carousel').carousel({
            interval: 5000,
            pause: "hover"


        });
    });


    </script>
   
    <!--關於日友-->
    <div class="back01 wow fadeInDown" data-wow-delay="0.5s" >
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-delay="1s">
                    <div class="service-box1">
                        <img alt="Brand" class="img-responsive" style="width:100%; box-shadow: 0 4px 15px rgba(159, 159, 159, 0.54);" src="resources/assets/images/018.jpg">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-delay="1s">
                    <div class="service-box1">
                        <div class="about-text">
                            <h3><em>{{Lang::get('sunnyfriend.Home-42')}}&nbsp;</em></h3>
                            <p>{{Lang::get('sunnyfriend.Home-43')}}</p>
                            <a target="_blank" href="assets/file/app/SFCP(CH).pdf"><div class="btn btn-default btnn ">{{Lang::get('sunnyfriend.Home-44')}}</div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <!---三個地點-->
    <div id="location" class="back section-padding wow fadeInDown">
        <div class="container">
            <div class="row">
                <div class="locationbox wow fadeInDown" data-wow-delay="0.5s">
                <h3><em>產業前進動能</em></h3>
                </div>
                <div class="col-md-1 col-sm-1 wow fadeInDown" data-wow-delay="1s">
                    <div class="service-icon"><img alt="Brand" class="img-responsive" src="resources/assets/images/house-01.svg"></div>
                </div>
                <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="1s">
                    <div class="service-box">
                        <div class="service-text">
                            <h3>雲林三廠</h3>
                            <p>為提升節能減碳效益，雲林三廠增加熱能回收設備，以減低燃料油之損耗，並藉由污染防制設備效能提升，減輕對環境負荷。</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 col-sm-1 wow fadeInDown" data-wow-delay="1.5s">
                    <div class="service-icon"><img alt="Brand" class="img-responsive" src="resources/assets/images/house-01.svg"></div>
                </div>
                <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="1.5s">
                    <div class="service-box">
                        <div class="service-text">
                            <h3>彰濱二期</h3>
                            <p>有害廢棄物處理數量將因市場需求而日益增加，彰濱廠已投入第二套焚化爐之設置規劃，以因應未來的有害事業廢棄物處理市場。</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 col-sm-1 wow fadeInDown" data-wow-delay="2s">
                    <div class="service-icon"><img alt="Brand" class="img-responsive" src="resources/assets/images/house-01.svg"></div>
                </div>
                <div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="2s">
                    <div class="service-box">
                        <div class="service-text">
                            <h3>北京二期</h3>
                            <p>北京醫療廢棄物處理市場長期供不應求，北京二期焚化廠之規劃設置，可滿足北京市醫療廢棄物市場需求，並提高北京醫療廢棄物妥善處理率。</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!--主要服務項目-->
    <div id="service" class="back01  wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <h1>主要服務項目</h1>
                <h2>以下為本公司之業務內容</h2>
                <div id="owl-one" class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="ih-item square effect13">
                            <img class="img-responsive img" src="resources/assets/images/Thumbnail/s01.jpg">
                        </div>
                        <div>
                            <p>事業廢棄物清除處理</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ih-item square effect13">
                            <img class="img-responsive img" src="resources/assets/images/Thumbnail/s02.jpg">
                        </div>
                        <div>
                            <p>醫療廢棄物清除處理</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ih-item square effect13">
                            <img class="img-responsive img" src="resources/assets/images/Thumbnail/s03.jpg">
                        </div>
                        <div>
                            <p>廢棄物檢驗分析與品管</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ih-item square effect13">
                            <img class="img-responsive img" src="resources/assets/images/Thumbnail/s04.jpg">
                        </div>
                        <div>
                            <p>焚化爐設計、規劃及建造</p>
                        </div>
                    </div>
                </div>
                <script>
                $(document).ready(function() {
                    var owl = $('#owl-one');
                    owl.owlCarousel({
                        margin: 30,
                        nav: true,
                        loop: true,
                        responsive: {
                            0: {
                                items: 1
                            },
                            600: {
                                items: 3
                            },
                            1000: {
                                items: 4
                            }
                        }
                    })
                })
                </script>
            </div>
        </div>
    </div>
    <!--最新消息-->
    <div id="news" class="back2  wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <h1>最新消息</h1>
                <h2>日友最新資訊</h2>
                <div id="owl-two" class="owl-theme owl-carousel">
                    <div class="item"><a href="News/ImportantNews.html">
                        <img class=" icon_img" src="resources/assets/images/owl_icon/newsLOGO-02.svg">
                        <div class="ih-item square effect13 bottom_to_top">
                            <div class="news-caption">
                                <h1>重要消息</h1>
                                <h4>公開資訊觀測站</h4>
                                <p>投資人可以透過『公開資訊觀測站』，查詢本公司之重大訊息。(查詢代號：8341)......</p>
                            </div>
                            <img class="img-responsive img" src="resources/assets/images/news/new01.jpg">
                            <div class="info"></div></a>
                        </div>
                    </div>
                    <div class="item">
                                    <img class=" icon_img" src="resources/assets/images/owl_icon/newsLOGO-03.svg">

                        <div class="ih-item square effect13 bottom_to_top">
                            <div class="news-btn">
                                <h1>簡介影片</h1>
                                <h4>公司介紹</h4>
                                <a href="https://www.youtube.com/watch?v=nzoY7HRWAew&t=" target="_blank"><div class="btn btn-default newsbtn1 ">觀看中文版</div></a>
                                <a href="https://www.youtube.com/watch?v=gbnIhcsq_6c&t=" target="_blank"><div class="btn btn-default newsbtn1 ">觀看英文版</div></a>
                                <a href="AboutSF/IIC.html"><div class="btn btn-default newsbtn2 ">法人說明會相關資訊</div></a>
                            </div>
                            <img class="img-responsive img" src="resources/assets/images/news/new02.jpg">
                            <div class="info"></div>
                        </div>
                    </div>
                    <div class="item"><a href="News/WebsiteLinks.html">
                      <img class=" icon_img" src="resources/assets/images/owl_icon/newsLOGO-04.svg">
                        <div class="ih-item square effect13 bottom_to_top">
                            <div class="news-caption">
                                <h1>環保連結</h1>
                                <h4>相關環保資訊</h4>
                                <p>日友彰濱廠(中區事業廢棄物綜合處理中心)青新環境工程(股)公司......</p>
                            </div>
                            <img class="img-responsive img" src="resources/assets/images/news/new03.jpg">
                            <div class="info"></div></a>
                        </div>
                    </div>
                </div>
                <script>
                $(document).ready(function() {
                    var owl = $('#owl-two');
                    owl.owlCarousel({
                        margin: 30,
                        top:90,
                        nav: true,
                        loop: true,
                        dots: true,
                        responsive: {
                            0: {
                                items: 1
                            },
                            600: {
                                items: 3
                            },
                            1000: {
                                items: 3
                            }
                        }
                    })
                })
                </script>
            </div>
        </div>
    </div>
    <!--footer start from here-->
   <footer class="wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 footerleft">
                    <div class="logofooter">{{Lang::get('sunnyfriend.Footer-1')}}</div>
                    <p>日友公司成立於1994年，2000年成為潤泰集團環保產業基地，也是臺灣第一家專業生物醫療廢棄物焚化處理公司，日友公司擁有從研發、設計、製圖、操作、系統改良等全方位的廢棄物處理經驗，不斷革新並擴展海外市場，使日友公司營運得以穩定成長。</p>
                    <div><img alt="Brand" class="img-responsive" src="../resources/assets/images/footerLOGO.svg"></div>
                </div>
                <div class="col-md-8 col-sm-6 paddingtop-bottom">
                    <div class="heading7">{{Lang::get('sunnyfriend.Footer-2')}}</div>
                    <ul class="footer-ul">
                        <li>
                            <h6> <i class="fa fa-home" aria-hidden="true"></i>{{Lang::get('sunnyfriend.Footer-3')}}</h6></li>
                        <li>
                            <p>{{Lang::get('sunnyfriend.Footer-4')}}</p>
                        </li>
                        <li>
                            <h6> <i class="fa fa-home" aria-hidden="true"></i>{{Lang::get('sunnyfriend.Footer-5')}}</h6></li>
                        <li>
                            <p>{{Lang::get('sunnyfriend.Footer-6')}}</p>
                        </li>
                        <li>
                            <h6><i class="fa fa-phone" aria-hidden="true"></i>{{Lang::get('sunnyfriend.Footer-7')}}</h6></li>
                        <li><a href="#">{{Lang::get('sunnyfriend.Footer-8')}}</a></li>
                        <li>
                            <h6><i class="fa fa-envelope" aria-hidden="true"></i>{{Lang::get('sunnyfriend.Footer-9')}}</h6></li>
                        <li><a href="#">{{Lang::get('sunnyfriend.Footer-10')}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--footer start from here-->
    <a href="#" id="goTop" class="goTop"></a>

    <script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("goTop").style.display = "block";
    } else {
        document.getElementById("goTop").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document

</script>

    <div class="copyright footerbg">
        <div class="container">
            <div class="col-md-12">
                <p>© 2017 - All Rights with Sunny Friend</p>
            </div>
        </div>
    </div>
    <!--HEADER END-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="resources/js/bootstrap.min.js"></script>
    <script src="resources/js/wow.js"></script>
        <script>
    new WOW().init();
    </script>
    <script src="resources/js/tutorial.js"></script>
    <script src="resources/js/jquery.easing.1.3.js"></script>
    <script src="resources/js/scrollanimated.js"></script>
    <script src="resources/js/bootstrap-dropdownhover.min.js"></script>




</body>

</html>