    @extends('Layouts/admin')

@section('content')

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div>
                    @if (session('status')=='success')
                    <div class="alert alert-success">
                        <ul>
                            <li>{{session('message')}}</li>
                        </ul>
                    </div>
                    @elseif (session('status')=='failed')
                    <div class="alert alert-danger">~
                        <ul>
                            <li>{{session('message')}}</li>
                        </ul>
                    </div>
                    @endif
            </div>
            <div class="col-sm-12 col-md-12">
                <h3>環境保護查核行程</h3>
                <!-- Page Heading -->
            </div>
        </div>
        <div class="row" id="main">
            <div class="col-sm-2 col-md-2" id="content">
                <div class="dropdown">
                    <h4>選擇年度</h4>
                    <select class="selectpicker selectbtn" id="changeyear">
                    </select>
                </div>
            </div>
        <div class="col-sm-2 col-md-2" id="content">
            </br>
            </br>
            <button class="btn btnn btn-primary" data-toggle="modal" data-target="#AddInvetorInfo">新增</button>
        <div>
    </br>
</br>
<!-- Modal -->
    <div class="modal fade" id="AddInvetorInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            {!! Form::open(array('url'=>'/Admin/Environmentalprotection/AdminEnvUnit','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
            {{csrf_field()}}
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">環境保護查核行程</h4>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <div class="form-row form-group">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <label class="control-label" for="inputEmail3">*日期</label>
                                <div class='input-group date' id='datetimCreate'>
                                    <input type='text' class="form-control" name="Date" required/>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <label class="control-label" for="inputEmail3">*事項</label>
                                <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Notes" required/>
                            </div>
                            <div class="form-row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <label class="control-label" for="inputEmail3">*主辦機關</label>
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Organizer" required/>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <label class="control-label" for="inputEmail3">*結果</label>
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Result" required/>
                                </div>
                            </div>
                    </div>
                </div>
                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input class="btn btn-primary" type="submit" value="送出">
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    </div>
    </div>
    </div>
    <!-- /.row -->
    </div>

 <!-- /.container-fluid -->
    <div class="back2 back3 wow fadeInDown" data-wow-delay="0.5s">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <table class="table table2 each-table">
                        <thead>
                            <tr>
                                <th style="text-align: center;">日期</th>
                                <th style="text-align: center;">事項</th>
                                <th style="text-align: center;">主辦機關</th>
                                <th style="text-align: center;">結果</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


<div class="modal fade" id="EditInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        {!! Form::open(array('url'=>'/Admin/Environmentalprotection/AdminEnvUnit/edit','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
        {{csrf_field()}}
            <input name="id" type="hidden">
                <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">編輯</h4>
                        </div>
                        <!-- Modal Body -->
                        <div class="modal-body">
                            <form class="form-horizontal" role="form">
                                <div class="form-row form-group">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <label class="control-label" for="inputEmail3">*日期</label>
                                        <div class='input-group date' id='datetimeEdit'>
                                            <input type='text' class="form-control" name="Date"/>
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <label class="control-label" for="inputEmail3">*事項</label>
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Notes" required/>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <label class="control-label" for="inputEmail3">*主辦機關</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Organizer" required/>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <label class="control-label" for="inputEmail3">*結果</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Result" required/>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Modal Footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                            <input class="btn btn-primary" type="submit" value="送出">
                        </div>
                {!! Form::close() !!}
        </div>
    </div>
</div>
    
<div class="modal fade" id="DelInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" aria-hidden="true">
        <div class="modal-dialog">
        {!! Form::open(array('url'=>'/Admin/Environmentalprotection/AdminEnvUnit/delete','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
        {{csrf_field()}}
        <input name="id" type="hidden">
            <div class="modal-content">
                <!-- Modal Body -->
                <div class="modal-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-row form-group">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <label class="control-label">確認刪除嗎？</label>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                    <input class="btn btn-primary" type="submit" value="送出">
                </div>
            </div>
        {!! Form::close() !!}
        </div>
    </div>
<script src="../../resources/js/moment.min.js"></script>
<script src="../../resources/js/bootstrap-datetimepicker.min.js"></script>
    
<script>
    $( document ).ready(function() {
        // Bootstrap DateTimePicker v4
        $('#datetimCreate').datetimepicker({
            format: 'YYYY-MM-DD'
        });
        $('#datetimeEdit').datetimepicker({
            format: 'YYYY-MM-DD'
        });
        $
        //取得年份
        getYear();
        changeYear($("#changeyear").val());
        $('#changeyear').on('change',function(){
            $(".each-table tbody").html("");
            changeYear($(this).val());
        });

        $('.each-table').DataTable( {
            "ordering": false, 
        });
    });

    function getYear(){
        $("#changeyear").html("");
        var d = new Date();
        var n = d.getFullYear()+1;
        var years = [];
        for(var y=0; y<5; y++){
            years.push(n);
            n--;
        }

        var eachTable = $("#changeyear");
        eachTable.append("<option>全部</option>");
        $.each(years, function(index, element) {
            eachTable.append("<option>"+ element +"</option>");
        });
    }

    function changeYear(year){
        var values = [];
        var json = @json($data);

        if(year=="全部"){
            for(var i = 0; i < json.length; i++){  
                values.push(json[i]);
            }
        }else{
            for(var i = 0; i < json.length; i++){
                if(json[i].Date.substr(0 ,4)==year){
                    values.push(json[i]);
                }
            }
        }

        var eachTable = $(".each-table tbody");
        $.each(values, function(index, element) {
            eachTable.append("<tr>" +
                "<td data-th='日期' class='Date' style='text-align: center;'>"+ element.Date +"</td>"+
                "<td data-th='事項' class='Notes' style='text-align: center;'>"+ element.Notes +"</td>"+
                "<td data-th='主辦機關' class='Organizer' style='text-align: center;'>"+ element.Organizer +"</td>"+
                "<td data-th='結果' class='Result' style='text-align: center;'>"+ element.Result +"</td>"+
                "<td data-th='修改' style='text-align: right;'>"+
                "<button class='btn btnn btn-default openedit' data-toggle='modal' data-id="+ element.id +" data-target='#EditInfo'>編輯</button>"+
                "<button class='btn btn-default opendel' data-toggle='modal' data-id="+ element.id +" data-target='#DelInfo'>刪除</button>"+
                "<td>"+
                "</tr>");
        });
        
        $('.openedit').on("click", function () {
            var tr = $(this).closest('tr');
            $('#EditInfo').find("input[name='Date']").val(tr.find(".Date").text());
            $("#EditInfo").find("input[name='id']").val($(this).attr('data-id'));
            $("#EditInfo").find("input[name='Notes']").val(tr.find(".Notes").text());
            $("#EditInfo").find("input[name='Organizer']").val(tr.find(".Organizer").text());
            $("#EditInfo").find("input[name='Result']").val(tr.find(".Result").text());
        });

        $('.opendel').on("click", function () {           
            $("#DelInfo").find("input[name='id']").val($(this).attr('data-id'));
            
        });
    }
</script>

@endsection