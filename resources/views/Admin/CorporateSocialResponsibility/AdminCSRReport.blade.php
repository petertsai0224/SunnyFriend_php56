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
                        <h3>企業社會責任報告書</h3>
                        <!-- Page Heading -->
                    </div>
                </div>
                <div class="row" id="main">
                    <div class="col-sm-8 col-md-10" id="content">
                        <button class="btnn btn btn-primary" data-toggle="modal" data-target="#AddInvetorInfo">新增檔案</button>
                        </br>
                        </br>
                        <!-- Modal -->
                        <div class="modal fade" id="AddInvetorInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    {!! Form::open(array('url'=>'/Admin/CorporateSocialResponsibility/CSRReport','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                                    {{csrf_field()}}
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel">企業社會責任報告書</h4>
                                    </div>
                                    <!-- Modal Body -->
                                    <div class="modal-body">
                                            <div class="form-row form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    </br>
                                                    <label class="control-label" >*請選擇PDF檔案</label>
                                                    {!! Form::file('file', array('class' => 'filestyle','style'=>'width:100%','accept'=>'application/pdf')) !!}
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12">
                                                    </br>
                                                    <label class="control-label" >*請選擇圖片</label>
                                                    {!! Form::file('image', array('class' => 'filestyle','style'=>'width:100%','accept'=>'application/image/*')) !!}
                                                </div>
                                            </div>
                                    </div>
                                    <!-- Modal Footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">
                                            Close
                                        </button>
                                        {!! Form::submit('確認上傳', array('class'=>'btn btn-primary')) !!}
                                    </div>
                                {!! Form::close() !!}
                                </div>
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
                                    <!--<th>上傳順序</th>-->
                                    <th>檔案名稱</th>
                                    <th>圖片名稱</th>
                                    <th>圖片</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $csr)
                                    <tr>
                                        <!--<td data-th="年度">{{$csr->id}}</td>-->
                                        <td data-th="檔案名稱">{{$csr->OriFileName}}</td>
                                        <td data-th="圖片名稱">{{$csr->OriImageName}}</td>
                                        <td data-th="圖片"><a href="#" class=""><img src="../../resources/assets/images/CorporateSocialResponsibility/csr報告書/{{$csr->ImageName}}" alt="..."  width="72" height="100"></a></td>
                                        <td style='text-align: center;'><button class='btn btn-default opendel' data-toggle='modal' data-id="{{$csr->id}}" data-target='#DelInfo'>刪除</button><td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="modal fade" id="DelInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            {!! Form::open(array('url'=>'/Admin/CorporateSocialResponsibility/CSRReport/delete','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
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

@endsection

@section('script')

<script>
    $( document ).ready(function() {

        $('.each-table').DataTable( {
            "ordering": false, 
        });

        $('.opendel').on("click", function () {           
            $("#DelInfo").find("input[name='id']").val($(this).attr('data-id'));
            
        });
    });
</script>

@endsection