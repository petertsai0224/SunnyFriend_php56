@extends('Layouts/app')

@section('content')
    <!--banner-->
    <div class="bannerArea b-box  wow fadeInDown" data-wow-delay="0.5s ">
        <img class="img-responsive" src="../resources/assets/images/news/new_banner.jpg">
        <div class="titleBox clearfix">
            <h2>{{Lang::get('sunnyfriend.Investor')}}</h2>
        </div>
    </div>  
    <div class="wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="breads">
                    <a href="../index.php">{{Lang::get('sunnyfriend.Home')}}</a>
                    <span>></span>
                    <span>{{Lang::get('sunnyfriend.Investor')}}</span>
                    <span>></span>
                    <b>{{Lang::get('sunnyfriend.MonthlyRevenus')}}</b>
                </div>
            </div>
        </div>
    </div>
    <!--重大消息-->
    <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h3>{{Lang::get('sunnyfriend.MonthlyRevenus')}}<div class="titleline"></div></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <select class="selectpicker selectbtn"  id="changeyear">
                    </select>
                </div>
                </br>
                </br>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <p id="changename">{{Lang::get('sunnyfriend.MonthlyRevenus-1')}}</p>
                    <p>{{Lang::get('sunnyfriend.MonthlyRevenus-2')}}</p>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="table-responsive dragscroll">
                        <table class="table table2 each-table">
                            <thead>
                                <tr style="background-color: #AACD03;text-align: center;">
                                    <td class="middle" rowspan="2">{{Lang::get('sunnyfriend.MonthlyRevenus-3')}}
                                        <br>{{Lang::get('sunnyfriend.MonthlyRevenus-4')}}</td>
                                    <td class="middle" class="middle" colspan="2">{{Lang::get('sunnyfriend.MonthlyRevenus-5')}}
                                        <br>{{Lang::get('sunnyfriend.MonthlyRevenus-6')}}</td>
                                    <tr style="background-color: #AACD03;text-align: center;">
                                        <td class="middle">{{Lang::get('sunnyfriend.MonthlyRevenus-7')}}
                                            <br>{{Lang::get('sunnyfriend.MonthlyRevenus-8')}}</td>
                                        <td class="middle">{{Lang::get('sunnyfriend.MonthlyRevenus-9')}}
                                            <br>{{Lang::get('sunnyfriend.MonthlyRevenus-10')}}</td>
                                    </tr>
                            </thead>
                            <tbody class="middle" style="text-align: center;">
                            <!--
                                <tr>
                                    <td>一月(Jan.)</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>二月(Feb.)</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>三月(Mar.)</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>四月(Apr.)</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>五月(May)</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>六月(Jun.)</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>七月(Jul.)</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>八月(Aug.)</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>九月(Sept.)</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>十月(Oct.)</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>十一月(Nov.)</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>十二月(Dec.)</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                
                                <tr>
                                    <td>本年累計(Total)</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

<script>
    $( document ).ready(function() {
        getYear();
        changeYear($("#changeyear").val());
        $("#changename").text($("#changeyear").val()+"每月營收("+$("#changeyear").val()+" Monthly Revenue)");
        $('#changeyear').on('change',function(){
            $("#changename").text($(this).val()+"每月營收("+$(this).val()+" Monthly Revenue)");
            $(".each-table tbody").html("");
            changeYear($(this).val());
        });
    });

    function getYear(){
        $("#changeyear").html("");
        var d = new Date();
        var n = d.getFullYear();
        var years = [];
        for(var y=0; y<5; y++){
            years.push(n);
            n--;
        }

        var eachTable = $("#changeyear");
            $.each(years, function(index, element) {
                eachTable.append("<option>"+ element +"</option>");
            });
    }

    function changeYear(year){
        var values = [];
        var json = @json($data);

        for(var i = 0; i < json.length; i++){
            if(json[i].Year==year){
                values.push(json[i]);
            }
        }

        var eachTable = $(".each-table tbody");
        var AmountTotal = 0;
            $.each(values, function(index, element) {
                eachTable.append("<tr>" +
                                    "<td>"+ element.Month +"</td>"+
                                    "<td>"+ fnc_format(element.Amount) +"</td>"+
                                    "<td>"+ element.Consolidated +"</td>"+
                                "</tr>");
                AmountTotal+=parseInt(element.Amount);
                
            });
            
            eachTable.append("<tr>" +
                                "<td>本年累計(Total)</td>"+
                                "<td>"+ AmountTotal +"</td>"+
                                "<td></td>"+
                            "</tr>");
    }

    function fnc_format(str){      
        var newStr="";  
        for(var m=0;m<str.length;m++){
            var c=str.charAt(m);
            if(c=='.')
            break;
        }
        var b=m%3; 
        switch(b){
            case 1:{
                for(var i=0;i<str.length;i++){
                newStr=newStr+str.charAt(i);
                    if(i==0){
                    newStr=newStr+',';
                    }
                    else {
                    if(i%3==0 && i<m-1){
                            newStr=newStr+',' ;
                            }
                        }
                    }
                break;
                }
            case 2:{
                for(var i=0;i<str.length;i++){
                newStr=newStr+str.charAt(i);
                    if(i==1){
                    newStr=newStr+',';
                    }
                    else {
                    if((i+2)%3==0 && i<m-1){
                        newStr=newStr+',' ;
                            }
                        }
                    }
                break;
                }
            case 0:{
                for(var i=0;i<str.length;i++){
                newStr=newStr+str.charAt(i);
                if((i+1)%3==0 && i<m-1){
                        newStr=newStr+',';
                            }
                    }
                break;
                }         
        }
        return newStr;
    }
</script>

@endsection