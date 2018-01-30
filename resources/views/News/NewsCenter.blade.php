@extends('Layouts/app')

@section('content')
<!--banner-->
<div class="bannerArea b-box  wow fadeInDown" data-wow-delay="0.5s ">
    <img class="img-responsive" src="../assets/images/news/new_banner01.jpg">
    <div class="titleBox clearfix">
        <h2>{{Lang::get('sunnyfriend.News')}}</h2>
    </div>
</div>




<div class="wow fadeInDown" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="breads">
                <a href="../index.php">{{Lang::get('sunnyfriend.Home')}}</a>
                <span>></span>
                <b>{{Lang::get('sunnyfriend.News')}}</b>
            </div>
        </div>
    </div>
</div>


    <!--最新消息-->
    <div id="news" class="back02  wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div id="owl-two" class="owl-theme owl-carousel">
                    <div class="item"><a href="../News/ImportantNews.html">
                                    <img class=" icon_img" src="../assets/images/owl_icon/newsLOGO-02.svg">

                        <div class="ih-item square effect13 bottom_to_top">
                            <div class="news-caption">
                                <h1>{{Lang::get('sunnyfriend.NewsCenter-1')}}</h1>
                                <h4>{{Lang::get('sunnyfriend.NewsCenter-2')}}</h4>
                                <p>{{Lang::get('sunnyfriend.NewsCenter-3')}}</p>
                            </div>
                            <img class="img-responsive img" src="../assets/images/news/new01.jpg"></a>
                            <div class="info"></div>
                        </div>
                    </div>
                    <div class="item">
                                    <img class=" icon_img" src="../assets/images/owl_icon/newsLOGO-03.svg">

                        <div class="ih-item square effect13 bottom_to_top">
                            <div class="news-btn">
                                <h1>{{Lang::get('sunnyfriend.NewsCenter-4')}}</h1>
                                <h4>{{Lang::get('sunnyfriend.NewsCenter-5')}}</h4>
                                <a href="https://www.youtube.com/watch?v=nzoY7HRWAew&t=" target="_blank"><div class="btn btn-default newsbtn1 ">{{Lang::get('sunnyfriend.NewsCenter-6')}}</div></a>
                                <a href="https://www.youtube.com/watch?v=gbnIhcsq_6c&t=" target="_blank"><div class="btn btn-default newsbtn1 ">{{Lang::get('sunnyfriend.NewsCenter-7')}}</div></a>
                                <a href="../AboutSF/IIC.html"><div class="btn btn-default newsbtn2 ">{{Lang::get('sunnyfriend.NewsCenter-8')}}</div></a>
                            </div>
                            <img class="img-responsive img" src="../assets/images/news/new02.jpg">
                            <div class="info"></div>
                        </div>
                    </div>
                    <div class="item"><a href="../News/WebsiteLinks.html">
                      <img class=" icon_img" src="../assets/images/owl_icon/newsLOGO-04.svg">
                        <div class="ih-item square effect13 bottom_to_top">
                            <div class="news-caption">
                                <h1>{{Lang::get('sunnyfriend.NewsCenter-9')}}</h1>
                                <h4>{{Lang::get('sunnyfriend.NewsCenter-10')}}</h4>
                                <p>{{Lang::get('sunnyfriend.NewsCenter-11')}}</p>
                            </div>
                            <img class="img-responsive img" src="../assets/images/news/new03.jpg">
                            <div class="info"></div>
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
@endsection