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
                        <div class="alert alert-danger">
                            <ul>
                                <li>{{session('message')}}</li>
                            </ul>
                        </div>
                    @endif

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                    <div class="col-sm-12 col-md-12">
                        <h3>財務資訊</h3>
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
                    <!--
                    <div class="col-sm-2 col-md-2" id="content">
                        <div class="dropdown">
                            <h4>選擇類型</h4>
                            <select class="selectpicker selectbtn">
                                <option>中文財報</option>
                                <option>英文財報</option>
                            </select>
                        </div>
                    </div>
                    -->
                    <div class="col-sm-2 col-md-2" id="content">
                        </br>
                        </br>
                        <button class="btnn btn btn-primary" data-toggle="modal" data-target="#AddInvetorInfo">新增</button>
                        <!-- Modal -->
                        <div class="modal fade" id="AddInvetorInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            {!! Form::open(array('url'=>'/Admin/Investor/AdminFinancialInformation','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                            {{csrf_field()}}
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel">財務資訊</h4>
                                    </div>
                                    <!-- Modal Body -->
                                    <div class="modal-body">
                                        <form class="form-horizontal" role="form">
                                            <div class="form-row form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <label class="control-label" for="inputEmail3">*新增年度</label>
                                                    <select class="selectpicker selectbtn" id="addyear" name="year">
                                                    </select>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <label class="control-label" for="inputEmail3">*選擇類型</label>
                                                    <select class="selectpicker selectbtn"  name="type">
                                                        <option>中文報表</option>
                                                        <option>英文報表</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row form-group">
                                                <!--
                                                <div class="col-lg-12 col-md-12 col-sm-12">
                                                    <label class="control-label" for="inputEmail3">*檔案名稱</label>
                                                    <input type="email" class="form-control" id="inputfilename2" placeholder="請輸入名稱" />
                                                </div>
                                                -->
                                                <div class="col-lg-6 col-md-12 col-sm-12">
                                                </br>
                                                    <label class="control-label" for="inputEmail3">*夾帶PDF檔案</label>
                                                   {!! Form::file('file', array('class' => 'filestyle','accept'=>'application/pdf')) !!}
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Modal Footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                                        {!! Form::submit('確認上傳', array('class'=>'btn btn-primary')) !!}
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
                                    <th style="text-align: center;">年度</th>
                                    <th style="text-align: center;">類型</th>
                                    <th style="text-align: center;">檔案名稱</th>
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
        <!-- /#page-wrapper -->

        <div class="modal fade" id="EditInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            {!! Form::open(array('url'=>'/Admin/Investor/AdminFinancialInformation/edit','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
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
                        <div class="form-row form-group">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <label class="control-label">*新增年度</label>
                                <select class="selectpicker selectbtn edityear" name="year" id="edityear">
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <label class="control-label" for="inputEmail3">*選擇類型</label>
                                <select class="selectpicker selectbtn edittype" name="type" >
                                    <option>中文報表</option>
                                    <option>英文報表</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <label class="control-label">*原檔案名稱</label>
                                <input type="text" class="form-control" id="inputfilename2" placeholder="請輸入名稱" name="fileName" readonly/>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                </br>
                                <label class="control-label">*夾帶PDF檔案</label>
                                {!! Form::file('file', array('class' => 'filestyle','accept'=>'application/pdf','onchange' => 'checkfile(this)')) !!}
                            </div>
                        </div>
                    </div>
                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                        {!! Form::submit('送出', array('class'=>'btn btn-primary')) !!}
                    </div>
                </div>
            {!! Form::close() !!}
            </div>
        </div>

        <div class="modal fade" id="DelInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            {!! Form::open(array('url'=>'/Admin/Investor/AdminFinancialInformation/delete','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
            {{csrf_field()}}
            <input name="id" type="hidden">
                <div class="modal-content">
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <div class="form-row form-group">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <label class="control-label">確認刪除嗎？</label>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                        {!! Form::submit('確認', array('class'=>'btn btn-primary')) !!}
                    </div>
                </div>
            {!! Form::close() !!}
            </div>
        </div>

@endsection

@section('script')

<script>
    $( document ).ready(function() {
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
        $("#changeyear #addyear #edityear").html("");
        var d = new Date();
        var n = d.getFullYear()+1;
        var years = [];
        for(var y=0; y<6; y++){
            years.push(n);
            n--;
        }

        var eachTable = $("#addyear");
            $.each(years, function(index, element) {
                eachTable.append("<option>"+ element +"</option>");
            });

        var eachTable = $("#edityear");
            $.each(years, function(index, element) {
                eachTable.append("<option>"+ element +"</option>");
            });

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
                if(json[i].Year==year){
                    values.push(json[i]);
                }
            }
        }

        var eachTable = $(".each-table tbody");
            $.each(values, function(index, element) {
                eachTable.append("<tr>" +
                                    "<td data-th='年度' class='Year' style='text-align: center;'>"+ element.Year +"</td>"+
                                    "<td data-th='類型' class='Type' style='text-align: center;'>"+ element.Type +"</td>"+
                                    "<td data-th='檔案名稱' class='FileName' style='text-align: center;'>"+ element.FileName +"</td>"+
                                    "<td style='text-align: center;'>"+
                                        "<button class='btn btnn btn-default openedit' data-toggle='modal' data-id="+ element.id +" data-target='#EditInfo'>編輯</button>"+
                                        "<button class='btn btn-default opendel' data-toggle='modal' data-id="+ element.id +" data-target='#DelInfo'>刪除</button>"+
                                    "<td>"+
                                "</tr>");
            });

        $('.openedit').on("click", function () {
            getYear();
            var tr = $(this).closest('tr');
            var year = tr.find(".Year").text();
            var type = tr.find(".Type").text();
            var fileName = tr.find(".FileName").text();
            $('.edityear').selectpicker('val', year);
            $('.edittype').selectpicker('val', type);
            $("#EditInfo").find("input[name='id']").val($(this).attr('data-id'));
            $("#EditInfo").find("input[name='fileName']").val(fileName);
        });
        
        $('.opendel').on("click", function () {           
            $("#DelInfo").find("input[name='id']").val($(this).attr('data-id'));
            
        });
    }

</script>

@endsection