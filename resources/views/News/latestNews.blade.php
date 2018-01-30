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
                    <a href="../index.html">{{Lang::get('sunnyfriend.Home')}}</a>
                    <span>></span>
                    <span>{{Lang::get('sunnyfriend.News')}}</span>
                </div>
            </div>
        </div>
    </div>
    <!--最新消息-->
    @foreach($data as $v)
        <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <h3>{{$v->Title}}<div class="titleline"></div></h3>
                        <p>{{$v->Date}}</p>
                        <!--
                        <h3>重要訊息-公開資訊觀測站<div class="titleline"></div></h3>
                        <p>2017/11/30</p>
                        -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <p class="JQellipsis">{{$v->Content}}</p>
                        <a href="{{url('News/Detail/'.$v->id)}}">
                            <div class="btn btn-default">{{Lang::get('sunnyfriend.latestNews-1')}}</div>
                        </a>
                        <!--
                        <p class="JQellipsis">日友環保科技股份有限公司(SUNNY FRIEND ENVIRONMENTAL TECHNOLOGY CO., LTD.)創立於1994年，在全體多位員工努力不懈下，不僅是全國第一家申請核准之感染性事業廢棄物處理機構，更於2003年SARS爆發之際，為行政院環保署指定之SARS廢棄物處理廠，本公司不惜投入大量的人力日友環保科技股份有限公司(SUNNY FRIEND ENVIRONMENTAL TECHNOLOGY CO., LTD.)創立於1994年，在全體多位員工努力不懈下，不僅是全國第一家申請核准之感染性事業廢棄物處理機構，更於2003年SARS爆發之際，為行政院環保署指定之SARS廢棄物處理廠，本公司不惜投入大量的人力日友環保科技股份有限公司(SUNNY FRIEND ENVIRONMENTAL TECHNOLOGY CO., LTD.)創立於1994年，在全體多位員工努力不懈下，不僅是全國第一家申請核准之感染性事業廢棄物處理機構，更於2003年SARS爆發之際，為行政院環保署指定之SARS廢棄物處理廠，本公司不惜投入大量的人力日友環保科技股份有限公司(SUNNY FRIEND ENVIRONMENTAL TECHNOLOGY CO., LTD.)創立於1994年，在全體多位員工努力不懈下，不僅是全國第一家申請核准之感染性事業廢棄物處理機構，更於2003年SARS爆發之際，為行政院環保署指定之SARS廢棄物處理廠，本公司不惜投入大量的人力</p>
                         <a href="news-subindex.html">
                        <div class="btn btn-default">閱讀更多</div>
                        -->
                    </a>
                    </div>
                </div>
                <div class="back99"> </div>
            </div>
        </div>
    @endforeach
    <script>
    $(function() {
        var len = 250; // 超過50個字以"..."取代
        $(".JQellipsis").each(function(i) {
            if ($(this).text().length > len) {
                $(this).attr("title", $(this).text());
                var text = $(this).text().substring(0, len - 1) + "...";
                $(this).text(text);
            }
        });
    });
    </script>
@endsection