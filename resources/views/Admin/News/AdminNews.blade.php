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
                        <h3>最新消息</h3>
                        <!-- Page Heading -->
                    </div>
                </div>
                <div class="row" id="main">
                    <div class="col-sm-8 col-md-10" id="content">
                        <button class="btnn btn btn-primary" data-toggle="modal" data-target="#AddInvetorInfo">新增</button>
                        </br>
                        </br>
                        <!-- Modal -->
                        <div class="modal fade" id="AddInvetorInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            {!! Form::open(array('url'=>'/Admin/News/AdminNews','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                            {{csrf_field()}}
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel">最新消息</h4>
                                    </div>
                                    <!-- Modal Body -->
                                    <div class="modal-body">
                                            <div class="form-row form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <label class="control-label" for="inputEmail3">*日期</label>
                                                    <div class='input-group date' id='datetimCreate'>
                                                        <input type='text' class="form-control" name="date"/>
                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <label class="control-label" for="inputEmail3">*標題</label>
                                                    <input type="input" class="form-control" id="inputEmail3" placeholder="請輸入名稱" name="title" />
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <label class="control-label" for="inputContent">*內容</label>
                                                        <textarea type="input" class="form-control" rows="20" cols="50" id="inputContent" name="content"></textarea>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                                        </br>
                                                        <label class="control-label" for="inputEmail3">*夾帶檔案</label>
                                                    {!! Form::file('file', array('class' => 'filestyle','accept'=>'application/pdf','onchange' => 'checkfile(this)')) !!}
                                                    </div>
                                                </div>
                                            </div>
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

        <div class="back3 wow fadeInDown" data-wow-delay="0.5s">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <table class="table table2 each-table">
                            <thead>
                                <tr>
                                    <th>發布日期</th>
                                    <th>標題</th>
                                    <th>內容</th>
                                    <th>檔案名稱</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $news)
                                    <tr>
                                        <td data-th="發布日期" class="Date">{{$news->Date}}</td>
                                        <td data-th="標題" class="Title">{{$news->Title}}</td>
                                        <td data-th="內容" class="Content" value="{{$news->Content}}">{{mb_substr($news->Content,0,50,"utf-8")}}</td>
                                        <td data-th="檔案名稱" class="FileName">{{$news->FileName}}</td>
                                        <td data-th="修改">
                                        <button class="btn btnn btn-default openedit" data-id="{{$news->id}}" data-toggle="modal" data-target="#EditInfo">編輯</button>
                                        <button class="btn btn-default opendel" data-id="{{$news->id}}" data-toggle="modal" data-target="#DelInfo">刪除</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="EditInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                            {!! Form::open(array('url'=>'/Admin/News/AdminNews/edit','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
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
                                                    <label class="control-label" for="inputEmail3">*日期</label>
                                                    <div class='input-group date' id='datetimeEdit'>
                                                        <input type='text' class="form-control" name="date"/>
                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <label class="control-label" for="inputEmail3">*標題</label>
                                                    <input type="input" class="form-control" id="inputtitle" placeholder="請輸入名稱" name="title"/>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <label class="control-label" for="inputContent">*內容</label>
                                                        <textarea type="input" class="form-control" rows="20" cols="50" id="inputContent" name="content"></textarea>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                                        <label class="control-label">*原檔案名稱</label>
                                                        <input type="text" class="form-control" id="inputfilename2" name="filename" readonly/>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                                        </br>
                                                        <label class="control-label" for="inputEmail3">*夾帶檔案</label>
                                                    {!! Form::file('file', array('class' => 'filestyle','accept'=>'application/pdf','onchange' => 'checkfile(this)')) !!}
                                                    </div>
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
            {!! Form::open(array('url'=>'/Admin/News/AdminNews/delete','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
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
                         {!! Form::submit('確認', array('class'=>'btn btn-primary')) !!}
                    </div>
                </div>
            {!! Form::close() !!}
            </div>
        </div>

        <!-- /.container-fluid -->
        <script src="../../resources/js/moment.min.js"></script>
        <script src="../../resources/js/bootstrap-datetimepicker.min.js"></script>
@endsection

@section('script')

<script>

    $( document ).ready(function() {
        $(function() {              
           // Bootstrap DateTimePicker v4
           $('#datetimCreate').datetimepicker({
                 format: 'YYYY-MM-DD'
           });
           $('#datetimeEdit').datetimepicker({
                 format: 'YYYY-MM-DD'
           });
        });    

        $('.each-table').DataTable( {
            "ordering": false, 
        });

        //編輯資料
        $('.openedit').on("click", function () {
            var tr = $(this).closest('tr');
            $("#EditInfo").find("input[name='id']").val($(this).attr('data-id'));
            $("#EditInfo").find("input[name='date']").val(tr.find(".Date").text());
            $("#EditInfo").find("input[name='title']").val(tr.find(".Title").text());
            $("#EditInfo").find("input[name='filename']").val(tr.find(".FileName").text());
            $("#EditInfo").find("textarea[name='content']").text(tr.find(".Content").attr('value'));
        });

        //刪除
        $('.opendel').on("click", function () {           
            $("#DelInfo").find("input[name='id']").val($(this).attr('data-id'));
        });
    });

</script>

@endsection