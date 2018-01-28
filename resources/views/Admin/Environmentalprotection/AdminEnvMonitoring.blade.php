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
            </div>
            <div class="col-sm-12 col-md-12">
                <h3>環境監測</h3>
                <!-- Page Heading -->
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12 col-sm-6 enchange">
                <input type="button" class="btnEM btn-table" value="煙道"></input>
                <input type="button" class="btnEM btn-table" value="原水"></input>
                <input type="button" class="btnEM btn-table" value="空氣監測"></input>
                <input type="button" class="btnEM btn-table" value="噪音振動"></input>
                <input type="button" class="btnEM btn-table" value="土壤"></input>
                <input type="button" class="btnEM btn-table" value="TCLP飛灰"></input>
                <input type="button" class="btnEM btn-table" value="TCLP底渣"></input>
                <input type="button" class="btnEM btn-table" value="地下水"></input>
        </div>
        
    </div>
    <br>
    <div class="row">
        <div class="col-md-1">
            <button class="btnn btn btn-primary" data-toggle="modal" data-target="#AddInvetorInfo">新增年度</button>
            <div class="modal fade" id="AddInvetorInfo" tabindex="-1" role="dialog" aria-labelledby="AddInvetorInfo" aria-hidden="true">
                        <div class="modal-dialog" style="width: 60%;">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header navbar navbar-light bg-faded">
                                    <button type="button" class="close" data-dismiss="modal">
                                        <span aria-hidden="true">&times;</span>
                                        <span class="sr-only">Close</span>
                                    </button>
                                    <h4 class="modal-title">新增環境監測資料</h4>
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#enflue" aria-controls="enflue" role="tab" data-toggle="tab">煙道</a></li>
                                        <li role="presentation"><a href="#enrawwater" aria-controls="enrawwater" role="tab" data-toggle="tab">原水</a></li>
                                        <li role="presentation"><a href="#enairquality" aria-controls="enairquality" role="tab" data-toggle="tab">空氣監測</a></li>
                                        <li role="presentation"><a href="#ennoisevibration" aria-controls="ennoisevibration" role="tab" data-toggle="tab">噪音振動</a></li>
                                        <li role="presentation"><a href="#ensoil" aria-controls="ensoil" role="tab" data-toggle="tab">土壤</a></li>
                                        <li role="presentation"><a href="#enflyash" aria-controls="enflyash" role="tab" data-toggle="tab">TCLP飛灰</a></li>
                                        <li role="presentation"><a href="#enincineratorbottom" aria-controls="enincineratorbottom" role="tab" data-toggle="tab">TCLP底渣</a></li>
                                        <li role="presentation"><a href="#engroundwater" aria-controls="engroundwater" role="tab" data-toggle="tab">地下水</a></li>
                                    </ul>
                                </div>
                                <!-- Modal Body -->
                                <div class="modal-body">
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="enflue">
                                            {!! Form::open(array('url'=>'/Admin/Environmentalprotection/AdminEnvMonitoring','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                                            {{csrf_field()}}
                                            <input type="hidden" name="title" value="enflue"></input>
                                            <div class="form-row form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <label class="control-label">*新增年度</label>
                                                    <select class="selectpicker selectbtn edityear" name="Year" id="addyearflue">
                                                    </select>
                                                </div>
                                                <div class="col-lg-12 col-md-6 col-sm-6" >
                                                    <hr>
                                                    <div style="float:right">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                                                        {!! Form::submit('確認上傳', array('class'=>'btn btn-primary')) !!}
                                                    </div>
                                                </div> 
                                            </div>        
                                            {!! Form::close() !!}
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="enrawwater">
                                            {!! Form::open(array('url'=>'/Admin/Environmentalprotection/AdminEnvMonitoring','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                                            {{csrf_field()}}
                                            <input type="hidden" name="title" value="enrawwater"></input>
                                            <div class="form-row form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <label class="control-label">*新增年度</label>
                                                    <select class="selectpicker selectbtn" name="Year" id="addyearrawwater">
                                                    </select>
                                                </div>
                                                <div class="col-lg-12 col-md-6 col-sm-6" >
                                                    <hr>
                                                    <div style="float:right">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                                                        {!! Form::submit('確認上傳', array('class'=>'btn btn-primary')) !!}
                                                    </div>
                                                </div> 
                                            </div>        
                                            {!! Form::close() !!}
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="enairquality">
                                            {!! Form::open(array('url'=>'/Admin/Environmentalprotection/AdminEnvMonitoring','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                                            {{csrf_field()}}
                                            <input type="hidden" name="title" value="enairquality"></input>
                                            <div class="form-row form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <label class="control-label">*新增年度</label>
                                                    <select class="selectpicker selectbtn" name="Year" id="addyearairquality">
                                                    </select>
                                                </div>
                                                <div class="col-lg-12 col-md-6 col-sm-6" >
                                                    <hr>
                                                    <div style="float:right">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                                                        {!! Form::submit('確認上傳', array('class'=>'btn btn-primary')) !!}
                                                    </div>
                                                </div> 
                                            </div>        
                                            {!! Form::close() !!}
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="ennoisevibration">
                                            {!! Form::open(array('url'=>'/Admin/Environmentalprotection/AdminEnvMonitoring','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                                            {{csrf_field()}}
                                            <input type="hidden" name="title" value="ennoisevibration"></input>
                                            <div class="form-row form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <label class="control-label">*新增年度</label>
                                                    <select class="selectpicker selectbtn" name="Year" id="addyearnoisevibration">
                                                    </select>
                                                </div>
                                                <div class="col-lg-12 col-md-6 col-sm-6" >
                                                    <hr>
                                                    <div style="float:right">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                                                        {!! Form::submit('確認上傳', array('class'=>'btn btn-primary')) !!}
                                                    </div>
                                                </div> 
                                            </div>        
                                            {!! Form::close() !!}
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="ensoil">
                                            {!! Form::open(array('url'=>'/Admin/Environmentalprotection/AdminEnvMonitoring','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                                            {{csrf_field()}}
                                            <input type="hidden" name="title" value="ensoil"></input>
                                            <div class="form-row form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <label class="control-label">*新增年度</label>
                                                    <select class="selectpicker selectbtn" name="Year" id="addyearsoil">
                                                    </select>
                                                </div>
                                                <div class="col-lg-12 col-md-6 col-sm-6" >
                                                    <hr>
                                                    <div style="float:right">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                                                        {!! Form::submit('確認上傳', array('class'=>'btn btn-primary')) !!}
                                                    </div>
                                                </div> 
                                            </div>        
                                            {!! Form::close() !!}                                 
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="enflyash">
                                            {!! Form::open(array('url'=>'/Admin/Environmentalprotection/AdminEnvMonitoring','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                                            {{csrf_field()}}
                                            <input type="hidden" name="title" value="enflyash"></input>                                    
                                            <div class="form-row form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <label class="control-label">*新增年度</label>
                                                    <select class="selectpicker selectbtn" name="Year" id="addyearflyash">
                                                    </select>
                                                </div>        
                                                <div class="col-lg-12 col-md-6 col-sm-6" >
                                                    <hr>
                                                    <div style="float:right">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                                                        {!! Form::submit('確認上傳', array('class'=>'btn btn-primary')) !!}
                                                    </div>
                                                </div> 
                                            </div>        
                                            {!! Form::close() !!}
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="enincineratorbottom">
                                            {!! Form::open(array('url'=>'/Admin/Environmentalprotection/AdminEnvMonitoring','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                                            {{csrf_field()}}
                                            <input type="hidden" name="title" value="enincineratorbottom"></input>
                                            <div class="form-row form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <label class="control-label">*新增年度</label>
                                                    <select class="selectpicker selectbtn" name="Year" id="addyearincineratorbottom">
                                                    </select>
                                                </div>        
                                                <div class="col-lg-12 col-md-6 col-sm-6" >
                                                    <hr>
                                                    <div style="float:right">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                                                        {!! Form::submit('確認上傳', array('class'=>'btn btn-primary')) !!}
                                                    </div>
                                                </div> 
                                            </div>        
                                            {!! Form::close() !!}
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="engroundwater">
                                            {!! Form::open(array('url'=>'/Admin/Environmentalprotection/AdminEnvMonitoring','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                                            {{csrf_field()}}
                                            <input type="hidden" name="title" value="engroundwater"></input>                                    
                                            <div class="form-row form-group">
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <label class="control-label">*新增年度</label>
                                                    <select class="selectpicker selectbtn edityear" name="Year" id="addyeargroundwater">
                                                    </select>
                                                </div>    
                                                <div class="col-lg-12 col-md-6 col-sm-6" >
                                                    <hr>
                                                    <div style="float:right">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                                                        {!! Form::submit('確認上傳', array('class'=>'btn btn-primary')) !!}
                                                    </div>
                                                </div> 
                                            </div>        
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
        <div class="col-md-1">
            <button class="btnn btn btn-primary" data-toggle="modal" data-target="#DelInvetorInfo">刪除年度</button>
            <div class="modal fade" id="DelInvetorInfo" tabindex="-1" role="dialog" aria-labelledby="DelInvetorInfo" aria-hidden="true">
                <div class="modal-dialog" style="width: 60%;">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header navbar navbar-light bg-faded">
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span aria-hidden="true">&times;</span>
                                            <span class="sr-only">Close</span>
                                        </button>
                                        <h4 class="modal-title">刪除環境監測資料</h4>
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#delenflue" aria-controls="delenflue" role="tab" data-toggle="tab">煙道</a></li>
                                            <li role="presentation"><a href="#delenrawwater" aria-controls="delenrawwater" role="tab" data-toggle="tab">原水</a></li>
                                            <li role="presentation"><a href="#delenairquality" aria-controls="delenairquality" role="tab" data-toggle="tab">空氣監測</a></li>
                                            <li role="presentation"><a href="#delennoisevibration" aria-controls="delennoisevibration" role="tab" data-toggle="tab">噪音振動</a></li>
                                            <li role="presentation"><a href="#delensoil" aria-controls="delensoil" role="tab" data-toggle="tab">土壤</a></li>
                                            <li role="presentation"><a href="#delenflyash" aria-controls="delenflyash" role="tab" data-toggle="tab">TCLP飛灰</a></li>
                                            <li role="presentation"><a href="#delenincineratorbottom" aria-controls="delenincineratorbottom" role="tab" data-toggle="tab">TCLP底渣</a></li>
                                            <li role="presentation"><a href="#delengroundwater" aria-controls="delengroundwater" role="tab" data-toggle="tab">地下水</a></li>
                                        </ul>
                        </div>
                        <!-- Modal Body -->
                        <div class="modal-body">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="delenflue">
                                                {!! Form::open(array('url'=>'/Admin/Environmentalprotection/AdminEnvMonitoring/delete','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                                                {{csrf_field()}}
                                                <input type="hidden" name="title" value="enflue"></input>
                                                <div class="form-row form-group">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <label class="control-label">*刪除年度</label>
                                                        <select class="selectpicker selectbtn edityear" name="Year" id="addyearflue">
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-12 col-md-6 col-sm-6" >
                                                        <hr>
                                                        <div style="float:right">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                                                            {!! Form::submit('確認上傳', array('class'=>'btn btn-primary')) !!}
                                                        </div>
                                                    </div> 
                                                </div>        
                                                {!! Form::close() !!}
                                </div>
                                <div role="tabpanel" class="tab-pane" id="delenrawwater">
                                                {!! Form::open(array('url'=>'/Admin/Environmentalprotection/AdminEnvMonitoring/delete','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                                                {{csrf_field()}}
                                                <input type="hidden" name="title" value="enrawwater"></input>
                                                <div class="form-row form-group">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <label class="control-label">*刪除年度</label>
                                                        <select class="selectpicker selectbtn" name="Year" id="addyearrawwater">
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-12 col-md-6 col-sm-6" >
                                                        <hr>
                                                        <div style="float:right">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                                                            {!! Form::submit('確認上傳', array('class'=>'btn btn-primary')) !!}
                                                        </div>
                                                    </div> 
                                                </div>        
                                                {!! Form::close() !!}
                                </div>
                                <div role="tabpanel" class="tab-pane" id="delenairquality">
                                                {!! Form::open(array('url'=>'/Admin/Environmentalprotection/AdminEnvMonitoring/delete','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                                                {{csrf_field()}}
                                                <input type="hidden" name="title" value="enairquality"></input>
                                                <div class="form-row form-group">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <label class="control-label">*刪除年度</label>
                                                        <select class="selectpicker selectbtn" name="Year" id="addyearairquality">
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-12 col-md-6 col-sm-6" >
                                                        <hr>
                                                        <div style="float:right">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                                                            {!! Form::submit('確認上傳', array('class'=>'btn btn-primary')) !!}
                                                        </div>
                                                    </div> 
                                                </div>        
                                                {!! Form::close() !!}
                                </div>
                                <div role="tabpanel" class="tab-pane" id="delennoisevibration">
                                                {!! Form::open(array('url'=>'/Admin/Environmentalprotection/AdminEnvMonitoring/delete','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                                                {{csrf_field()}}
                                                <input type="hidden" name="title" value="ennoisevibration"></input>
                                                <div class="form-row form-group">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <label class="control-label">*刪除年度</label>
                                                        <select class="selectpicker selectbtn" name="Year" id="addyearnoisevibration">
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-12 col-md-6 col-sm-6" >
                                                        <hr>
                                                        <div style="float:right">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                                                            {!! Form::submit('確認上傳', array('class'=>'btn btn-primary')) !!}
                                                        </div>
                                                    </div> 
                                                </div>        
                                                {!! Form::close() !!}
                                </div>
                                <div role="tabpanel" class="tab-pane" id="delensoil">
                                                {!! Form::open(array('url'=>'/Admin/Environmentalprotection/AdminEnvMonitoring/delete','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                                                {{csrf_field()}}
                                                <input type="hidden" name="title" value="ensoil"></input>
                                                <div class="form-row form-group">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <label class="control-label">*刪除年度</label>
                                                        <select class="selectpicker selectbtn" name="Year" id="addyearsoil">
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-12 col-md-6 col-sm-6" >
                                                        <hr>
                                                        <div style="float:right">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                                                            {!! Form::submit('確認上傳', array('class'=>'btn btn-primary')) !!}
                                                        </div>
                                                    </div> 
                                                </div>        
                                                {!! Form::close() !!}                                 
                                </div>
                                <div role="tabpanel" class="tab-pane" id="delenflyash">
                                                {!! Form::open(array('url'=>'/Admin/Environmentalprotection/AdminEnvMonitoring/delete','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                                                {{csrf_field()}}
                                                <input type="hidden" name="title" value="enflyash"></input>                                    
                                                <div class="form-row form-group">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <label class="control-label">*刪除年度</label>
                                                        <select class="selectpicker selectbtn" name="Year" id="addyearflyash">
                                                        </select>
                                                    </div>        
                                                    <div class="col-lg-12 col-md-6 col-sm-6" >
                                                        <hr>
                                                        <div style="float:right">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                                                            {!! Form::submit('確認上傳', array('class'=>'btn btn-primary')) !!}
                                                        </div>
                                                    </div> 
                                                </div>        
                                                {!! Form::close() !!}
                                </div>
                                <div role="tabpanel" class="tab-pane" id="delenincineratorbottom">
                                                {!! Form::open(array('url'=>'/Admin/Environmentalprotection/AdminEnvMonitoring/delete','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                                                {{csrf_field()}}
                                                <input type="hidden" name="title" value="enincineratorbottom"></input>
                                                <div class="form-row form-group">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <label class="control-label">*刪除年度</label>
                                                        <select class="selectpicker selectbtn" name="Year" id="addyearincineratorbottom">
                                                        </select>
                                                    </div>        
                                                    <div class="col-lg-12 col-md-6 col-sm-6" >
                                                        <hr>
                                                        <div style="float:right">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                                                            {!! Form::submit('確認上傳', array('class'=>'btn btn-primary')) !!}
                                                        </div>
                                                    </div> 
                                                </div>        
                                                {!! Form::close() !!}
                                </div>
                                <div role="tabpanel" class="tab-pane" id="delengroundwater">
                                                {!! Form::open(array('url'=>'/Admin/Environmentalprotection/AdminEnvMonitoring/delete','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                                                {{csrf_field()}}
                                                <input type="hidden" name="title" value="engroundwater"></input>                                    
                                                <div class="form-row form-group">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                        <label class="control-label">*刪除年度</label>
                                                        <select class="selectpicker selectbtn edityear" name="Year" id="addyeargroundwater">
                                                        </select>
                                                    </div>    
                                                    <div class="col-lg-12 col-md-6 col-sm-6" >
                                                        <hr>
                                                        <div style="float:right">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">關閉</button>
                                                            {!! Form::submit('確認上傳', array('class'=>'btn btn-primary')) !!}
                                                        </div>
                                                    </div> 
                                                </div>        
                                                {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col-md-12 col-sm-6">
                <h2 id="enname">煙道</h2>
            </div>  
            <div class="col-md-12 col-sm-6">
                <select class="selectpicker selectbtn"  id="changeyear">
                </select>
                </br></br>
            </div>                
    </div>

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">

            <!--煙道-->
            <center class="center-flue">
                <div class="table-responsive dragscroll">
                    <table class="table table5 table-flue">
                        <thead>
                            <tr style="background-color: #AACD03;">

                                <th class="middle" colspan="2">檢測項目內容</th>
                                <th class="middle" colspan="1">粒狀汙染物</th>
                                <th class="middle" colspan="1">二氧化硫</th>
                                <th class="middle" colspan="1">氮氧化合物</th>
                                <th class="middle" colspan="1">一氧化碳</th>
                                <th class="middle" colspan="1">氯化氫</th>
                                <th class="middle" colspan="1">鉛</th>
                                <th class="middle" colspan="1">鎘</th>
                                <th class="middle" colspan="1">汞</th>
                                <th class="middle" colspan="1"></th>
                                <th class="middle" colspan="1"></th>
                                <tr style="background-color: #cce166;text-align: center;">   
                                    <th class="middle" colspan="2">廠別</th>
                                    <th class="middle">(mg/Nm^3)</th>
                                    <th class="middle">(ppm)</th>
                                    <th class="middle">(ppm)</th>
                                    <th class="middle">(ppm)</th>
                                    <th class="middle">(ppm)</th>
                                    <th class="middle">(mg/Nm^3)</th>
                                    <th class="middle">(mg/Nm^3)</th>
                                    <th class="middle">(mg/Nm^3)</th>
                                    <th class="middle"></th>
                                    <th class="middle"></th>
                            </tr>        
                        </thead>
                        <tbody class="middle" style="text-align: center;">
                        </tbody>                           
                    </table>
                </div>
            </center>

            <div class="modal fade" id="EditFlueInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog">
                    {!! Form::open(array('url'=>'/Admin/Environmentalprotection/AdminEnvMonitoring/edit','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                    {{csrf_field()}}
                    <input type="hidden" name="id" >
                    <input type="hidden" name="title" value="enflue">
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
                                    <label class="control-label">*年度</label></br>
                                    <label id="edityearflue"></label>
                                </div>        
                                <div class="col-lg-12 col-md-6 col-sm-6">
                                    <label class="control-label">*季別</label></br>
                                    <label id="editseasonflue"></label>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6">
                                    <label class="control-label">*廠別</label></br>
                                    <label id="flueLocation"></label>
                                </div>
                                <div class="form-row">
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label" >*粒狀汙染物</label>
                                            <input type="text" class="form-control" placeholder="輸入內容" name="Granular" required/>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*二氧化硫</label>
                                            <input type="text" class="form-control" placeholder="輸入內容" name="Sulfurdioxide" required/>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*氮氧化合物</label>
                                            <input type="text" class="form-control" placeholder="輸入內容" name="Nitroxides" required/>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*一氧化碳</label>
                                            <input type="text" class="form-control" placeholder="輸入內容" name="Carbonmonoxide" required/>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*氯化氫</label>
                                            <input type="text" class="form-control" placeholder="輸入內容" name="Hydrogenchloride" required/>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*鉛</label>
                                            <input type="text" class="form-control" placeholder="輸入內容" name="Pb" required/>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*鎘</label>
                                            <input type="text" class="form-control" placeholder="輸入內容" name="Cd" required/>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*汞</label>
                                            <input type="text" class="form-control" placeholder="輸入內容" name="Hg" required/>
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
            </div>

            <div class="modal fade" id="DelFlueInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    {!! Form::open(array('url'=>'/Admin/Environmentalprotection/AdminEnvMonitoring/delete','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
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
            
            <!--原水-->
            <center style="display:none" class="center-rawwater">
                <div class="table-responsive dragscroll">
                    <table class="table table5 table-rawwater">
                            <thead>
                                <tr style="background-color: #AACD03;">
                                    <th class="middle" rowspan="2" colspan="2">檢測項目內容</th>
                                    <th class="middle" >水溫</th>
                                    <th class="middle" rowspan="2">pH值</th>
                                    <th class="middle" >懸浮固體</th>
                                    <th class="middle" >化學需氧量</th>
                                    <th class="middle" >大腸桿菌群</th>
                                    <th class="middle"></th>
                                    <th class="middle"></th>
                                </tr>
                                <tr style="background-color: #cce166;">
                                    <th class="middle" >°C</th>
                                    <th class="middle" >(mg/L)</th>
                                    <th class="middle" >(mg/L)</th>
                                    <th class="middle" >CFU/100mL</th>
                                    <th class="middle"></th>
                                    <th class="middle"></th>
                                </tr>
    
                            </thead>
                            <tbody class="middle" style="text-align: center;">
    
                            </tbody>                           
                    </table>
                </div>
            </center>
    
            <div class="modal fade" id="EditRawwaterInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog">
                        {!! Form::open(array('url'=>'/Admin/Environmentalprotection/AdminEnvMonitoring/edit','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                        {{csrf_field()}}
                        <input type="hidden" name="id" >
                        <input type="hidden" name="title" value="enrawwater">

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
                                        <label class="control-label">*年度</label></br>
                                        <label id="edityearrawwater"></label>
                                    </div>        
                                    <div class="col-lg-12 col-md-6 col-sm-6">
                                        <label class="control-label">*季別</label></br>
                                        <label id="editseasonrawwater"></label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label class="control-label">*廠別</label></br>
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Location" required/>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label class="control-label">*水溫</label></br>
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Watertemperature" required/>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label class="control-label">*pH值</label></br>
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="PHvalue" required/>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label" >*懸浮固體</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Suspendedsolids" required/>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*化學需氧量</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="COD" required/>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*大腸桿菌群</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Coliform" required/>
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
            </div>
    
            <div class="modal fade" id="DelRawwaterInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    {!! Form::open(array('url'=>'/Admin/Environmentalprotection/AdminEnvMonitoring/delete','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
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

            <!--空氣監測-->
            <center style="display:none" class="center-airquality">
                <div class="table-responsive dragscroll">
                    <table class="table table5 table-airquality">
                        <thead>
                            <tr style="background-color: #AACD03;">
                                <th class="middle" colspan="2">檢測項目內容</th>
                                <th class="middle" >風速</th>
                                <th class="middle" >風向</th>
                                <th class="middle" >濕度</th>
                                <th class="middle" >溫度</th>
                                <th class="middle" >TSP</th>
                                <th class="middle" >SO2</th>
                                <th class="middle" >NOx</th>
                                <th class="middle" >CO</th>
                                <th class="middle" >THC</th>
                                <th class="middle" >CH4</th>
                                <th class="middle" >NMHC</th>
                                <th class="middle" >PM10</th>
                                <th class="middle" >PM2.5</th>
                                <th class="middle" colspan="1"></th>
                                <th class="middle" colspan="1"></th>
                            </tr>
                            <tr style="background-color: #cce166;">
                                <th class="middle" colspan="2">內容</th>
                                <th class="middle" >(m/s)</th>
                                <th class="middle" >-</th>
                                <th class="middle" >%</th>
                                <th class="middle" >(°C)</th>
                                <th class="middle" >(ug/m3)</th>
                                <th class="middle" >(ppm)</th>
                                <th class="middle" >(ppm)</th>
                                <th class="middle" >(ppm)</th>
                                <th class="middle" >(ppm)</th>
                                <th class="middle" >(ppm)</th>
                                <th class="middle" >(ppm)</th>
                                <th class="middle" >(ug/m3)</th>
                                <th class="middle" >(ug/m3)</th>
                                <th class="middle"></th>
                                <th class="middle"></th>
                            </tr>

                        </thead>
                        <tbody class="middle" style="text-align: center;">

                        </tbody>                           
                    </table>
                </div>
            </center>

            <div class="modal fade" id="EditAirqualityInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog">
                    {!! Form::open(array('url'=>'/Admin/Environmentalprotection/AdminEnvMonitoring/edit','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                    {{csrf_field()}}
                    <input type="hidden" name="id" >
                    <input type="hidden" name="title" value="enairquality">
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
                                    <label class="control-label">*年度</label></br>
                                    <label id="edityearairquality"></label>
                                </div>        
                                <div class="col-lg-12 col-md-6 col-sm-6">
                                    <label class="control-label">*季別</label></br>
                                    <label id="editseasonairquality"></label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <label class="control-label">*廠別</label></br>
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Location" required/>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label class="control-label" >*風速</label>
                                        <input type="text" class="form-control" placeholder="輸入內容" name="Windspeed" required/>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label class="control-label">*風向</label>
                                        <input type="text" class="form-control" placeholder="輸入內容" name="Winddirection" required/>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label class="control-label">*濕度</label>
                                        <input type="text" class="form-control" placeholder="輸入內容" name="Humidity" required/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label class="control-label" >*溫度</label>
                                        <input type="text" class="form-control" placeholder="輸入內容" name="Temperature" required/>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label class="control-label">*TSP</label>
                                        <input type="text" class="form-control" placeholder="輸入內容" name="TSP" required/>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label class="control-label">*SO2</label>
                                        <input type="text" class="form-control" placeholder="輸入內容" name="SO2" required/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label class="control-label" >*NOx</label>
                                        <input type="text" class="form-control" placeholder="輸入內容" name="NOx" required/>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label class="control-label">*CO</label>
                                        <input type="text" class="form-control" placeholder="輸入內容" name="CO" required/>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label class="control-label">*THC</label>
                                        <input type="text" class="form-control" placeholder="輸入內容" name="THC" required/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label class="control-label" >*CH4</label>
                                        <input type="text" class="form-control" placeholder="輸入內容" name="CH4" required/>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label class="control-label">*NMHC</label>
                                        <input type="text" class="form-control" placeholder="輸入內容" name="NMHC" required/>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label class="control-label">*PM10</label>
                                        <input type="text" class="form-control" placeholder="輸入內容" name="PM10" required/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label class="control-label" >*PM2.5</label>
                                        <input type="text" class="form-control" placeholder="輸入內容" name="PM25" required/>
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
            </div>

            <div class="modal fade" id="DelAirqualityInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    {!! Form::open(array('url'=>'/Admin/Environmentalprotection/AdminEnvMonitoring/delete','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
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

            <!--噪音振動-->
            <center style="display:none" class="center-noisevibration">
                <div class="table-responsive dragscroll">
                    <table class="table table5 table-noisevibration">
                        <thead>
                            <tr style="background-color: #AACD03;text-align: center;">
                                <th class="middle" rowspan="2" colspan="2">檢測項目內容</th>
                                <th class="middle" >L日</th>
                                <th class="middle" >L晚</th>
                                <th class="middle" >L夜</th>
                                <th class="middle" >LV日</th>
                                <th class="middle" >LV夜</th>
                                <th class="middle"></th>
                                <th class="middle"></th>
                            </tr>
                            <tr style="background-color: #cce166;text-align: center;">
                                <th class="middle" >(dB)</th>
                                <th class="middle" >(dB)</th>
                                <th class="middle" >(dB)</th>
                                <th class="middle" >(°C)</th>
                                <th class="middle" >(ug/m3)</th>
                                <th class="middle"></th>
                                <th class="middle"></th>

                            </tr>

                        </thead>
                        <tbody class="middle" style="text-align: center;">

                        </tbody>                           
                    </table>
                </div>
            </center>

            <div class="modal fade" id="EditNoisevibrationInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog">
                    {!! Form::open(array('url'=>'/Admin/Environmentalprotection/AdminEnvMonitoring/edit','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                    {{csrf_field()}}
                    <input type="hidden" name="id" >
                    <input type="hidden" name="title" value="ennoisevibration">
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
                                    <label class="control-label">*年度</label></br>
                                    <label id="edityearnoisevibration"></label>
                                </div>        
                                <div class="col-lg-12 col-md-6 col-sm-6">
                                    <label class="control-label">*季別</label></br>
                                    <label id="editseasonnoisevibration"></label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <label class="control-label">*廠別</label></br>
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Location" required/>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <label class="control-label">*L日</label></br>
                                    <input type="text" class="form-control" placeholder="輸入內容" name="Lmorning" required/>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <label class="control-label">*L晚</label></br>
                                    <input type="text" class="form-control" placeholder="輸入內容" name="Levening" required/>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label class="control-label" >*L夜</label>
                                        <input type="text" class="form-control" placeholder="輸入內容" name="Lnight" required/>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label class="control-label">*LV日</label>
                                        <input type="text" class="form-control" placeholder="輸入內容" name="Lvmorning" required/>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label class="control-label">*LV夜</label>
                                        <input type="text" class="form-control" placeholder="輸入內容" name="Lvnight" required/>
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
            </div>

            <div class="modal fade" id="DelNoisevibrationInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    {!! Form::open(array('url'=>'/Admin/Environmentalprotection/AdminEnvMonitoring/delete','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
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

            <!--土壤-->
            <center style="display:none" class="center-soil">
                <div class="table-responsive dragscroll">
                    <table class="table table5 table-soil">
                        <thead>
                            <tr style="background-color: #AACD03;">
                                <th class="middle" rowspan="2" colspan="1">檢測項目內容</th>
                                <th class="middle" >鉛</th>
                                <th class="middle" >鎘</th>
                                <th class="middle" >汞</th>
                                <th class="middle"></th>
                                <th class="middle"></th>
                            </tr>
                            <tr style="background-color: #cce166;">
                                <th class="middle" >(mg/kg)</th>
                                <th class="middle" >(mg/kg)</th>
                                <th class="middle" >(mg/kg)</th>
                                <th class="middle"></th>
                                <th class="middle"></th>
                            </tr>

                        </thead>
                        <tbody class="middle" style="text-align: center;">

                        </tbody>                           
                    </table>
                </div>
            </center>

            <div class="modal fade" id="EditSoilInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog">
                    {!! Form::open(array('url'=>'/Admin/Environmentalprotection/AdminEnvMonitoring/edit','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                    {{csrf_field()}}
                    <input type="hidden" name="id" >
                    <input type="hidden" name="title" value="ensoil">
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
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <label class="control-label">*年度</label></br>
                                    <label id="edityearsoil"></label>
                                </div>        
                                <div class="col-lg-12 col-md-6 col-sm-6">
                                    <label class="control-label">*廠別</label></br>
                                    <label id="soilLocation"></label>
                                </div>
                            <div class="form-row form-group">
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <label class="control-label">*鉛</label></br>
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Pb" required/>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <label class="control-label">*鎘</label></br>
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Cd" required/>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label class="control-label" >*汞</label>
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Hg" required/>
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
            </div>

            <div class="modal fade" id="DelSoilInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    {!! Form::open(array('url'=>'/Admin/Environmentalprotection/AdminEnvMonitoring/delete','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
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

            <!--TCLP飛灰-->
            <center style="display:none" class="center-flyash">
                <div class="table-responsive dragscroll">
                    <table class="table table5 table-flyash">
                        <thead>
                                <tr style="background-color: #AACD03;">
                                    <th class="middle" colspan="3">檢測項目內容</th>
                                    <th class="middle" >六價鉻</th>
                                    <th class="middle" >總鎘</th>
                                    <th class="middle" >總鉻</th>
                                    <th class="middle" >總銅</th>
                                    <th class="middle" >總鉛</th>
                                    <th class="middle" >總鋇</th>
                                    <th class="middle" >總砷</th>
                                    <th class="middle" >總汞</th>
                                    <th class="middle" >總硒</th>
                                    <th class="middle"></th>
                                    <th class="middle"></th>
                                </tr>
                                <tr style="background-color: #cce166;">
                                    <th class="middle" ></th>
                                    <th class="middle" >地點</th>
                                    <th class="middle" >種類</th>
                                    <th class="middle" >(mg/L)</th>
                                    <th class="middle" >(mg/L)</th>
                                    <th class="middle" >(mg/L)</th>
                                    <th class="middle" >(mg/L)</th>
                                    <th class="middle" >(mg/L)</th>
                                    <th class="middle" >(mg/L)</th>
                                    <th class="middle" >(mg/L)</th>
                                    <th class="middle" >(mg/L)</th>
                                    <th class="middle" >(mg/L)</th>
                                    <th class="middle"></th>
                                    <th class="middle"></th>
                                </tr>
    
                        </thead>
                        <tbody class="middle" style="text-align: center;">
                        </tbody>                           
                    </table>
                </div>
            </center>
    
            <div class="modal fade" id="EditFlyashInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog">
                        {!! Form::open(array('url'=>'/Admin/Environmentalprotection/AdminEnvMonitoring/edit','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                        {{csrf_field()}}
                        <input type="hidden" name="id" >
                        <input type="hidden" name="title" value="enflyash">
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
                                        <label class="control-label">*年度</label></br>
                                        <label id="edityearflyash"></label>
                                    </div>        
                                    <div class="col-lg-12 col-md-6 col-sm-6">
                                        <label class="control-label">*季別</label></br>
                                        <label id="editseasonflyash"></label>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-6">
                                        <label class="control-label">*廠別</label></br>
                                        <label id="flyashLocation"></label>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label class="control-label" >*種類</label>
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Type" required/>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label" >*六價鉻</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Cr6" required/>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*總鎘</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalCd" required/>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*總鉻</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalCr" required/>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*總銅</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalCu" required/>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*總鉛</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalPb" required/>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*總鋇</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalBa" required/>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*總砷</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalAs" required/>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*總汞</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalHg" required/>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*總硒</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalSe" required/>
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
            </div>
    
            <div class="modal fade" id="DelFlyashInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    {!! Form::open(array('url'=>'/Admin/Environmentalprotection/AdminEnvMonitoring/delete','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
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

            <!--TCLP底渣-->
            <center style="display:none" class="center-incineratorbottom">
                <div class="table-responsive dragscroll">
                    <table class="table table5 table-incineratorbottom">
                        <thead>
                            <tr style="background-color: #AACD03;">
                                <th class="middle" colspan="3">檢測項目內容</th>
                                <th class="middle" >六價鉻</th>
                                <th class="middle" >總鎘</th>
                                <th class="middle" >總鉻</th>
                                <th class="middle" >總銅</th>
                                <th class="middle" >總鉛</th>
                                <th class="middle" >總鋇</th>
                                <th class="middle" >總砷</th>
                                <th class="middle" >總汞</th>
                                <th class="middle" >總硒</th>
                                <th class="middle"></th>
                                <th class="middle"></th>
                            </tr>
                            <tr style="background-color: #cce166;">
                                <th class="middle" ></th>
                                <th class="middle" >地點</th>
                                <th class="middle" >種類</th>
                                <th class="middle" >(mg/L)</th>
                                <th class="middle" >(mg/L)</th>
                                <th class="middle" >(mg/L)</th>
                                <th class="middle" >(mg/L)</th>
                                <th class="middle" >(mg/L)</th>
                                <th class="middle" >(mg/L)</th>
                                <th class="middle" >(mg/L)</th>
                                <th class="middle" >(mg/L)</th>
                                <th class="middle" >(mg/L)</th>
                                <th class="middle"></th>
                                <th class="middle"></th>
                            </tr>   

                        </thead>
                        <tbody class="middle" style="text-align: center;">

                        </tbody>                           
                    </table>
                </div>
            </center>

            <div class="modal fade" id="EditIncineratorbottomInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog">
                    {!! Form::open(array('url'=>'/Admin/Environmentalprotection/AdminEnvMonitoring/edit','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                    {{csrf_field()}}
                    <input type="hidden" name="id" >
                    <input type="hidden" name="title" value="enincineratorbottom">
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
                                    <label class="control-label">*年度</label></br>
                                    <label id="edityearincineratorbottom"></label>
                                </div>        
                                <div class="col-lg-12 col-md-6 col-sm-6">
                                    <label class="control-label">*季別</label></br>
                                    <label id="editseasonincineratorbottom"></label>
                                </div>
                                <div class="col-lg-12 col-md-6 col-sm-6">
                                    <label class="control-label">*廠別</label></br>
                                    <label id="incineratorbottomLocation"></label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <label class="control-label" >*種類</label>
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Type" required/>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label class="control-label" >*六價鉻</label>
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Cr6" required/>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label class="control-label">*總鎘</label>
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalCd" required/>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label class="control-label">*總鉻</label>
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalCr" required/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label class="control-label">*總銅</label>
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalCu" required/>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label class="control-label">*總鉛</label>
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalPb" required/>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label class="control-label">*總鋇</label>
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalBa" required/>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label class="control-label">*總砷</label>
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalAs" required/>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label class="control-label">*總汞</label>
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalHg" required/>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <label class="control-label">*總硒</label>
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalSe" required/>
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
            </div>

            <div class="modal fade" id="DelIncineratorbottomInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                {!! Form::open(array('url'=>'/Admin/Environmentalprotection/AdminEnvMonitoring/delete','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
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

            <!--地下水-->
            <center style="display:none" class="center-groundwater">
                <div class="table-responsive dragscroll">
                    <table class="table table5 table-groundwater">
                        <thead>
                            <tr style="background-color: #AACD03;">

                                <th class="middle" colspan="2">檢測項目內容</th>
                                <th class="middle" colspan="1">總有機碳</th>
                                <th class="middle" colspan="1">TDS</th>
                                <th class="middle" colspan="1">硫酸鹽</th>
                                <th class="middle" colspan="1">氯鹽</th>
                                <th class="middle" colspan="1">總硬度</th>
                                <th class="middle" colspan="1">硝酸鹽氮</th>
                                <th class="middle" colspan="1">氨氮</th>
                                <th class="middle" colspan="1">鉛</th>
                                <th class="middle" colspan="1">鉻</th>
                                <th class="middle" colspan="1">錳</th>
                                <th class="middle" colspan="1">鐵</th>
                                <th class="middle" colspan="1">汞</th>
                                <th class="middle" colspan="1">砷</th>
                                <th class="middle" colspan="1">鎳</th>
                                <th class="middle" colspan="1">鋅</th>
                                <th class="middle" colspan="1">銅</th>
                                <th class="middle" rowspan="2">PH值</th>
                                <th class="middle" colspan="1">溫度</th>
                                <th class="middle" colspan="1">濁度</th>
                                <th class="middle" colspan="1">導電度</th>
                                <th class="middle" colspan="1">比導電度</th>
                                <th class="middle" colspan="1">油脂</th>
                                <th class="middle" colspan="1">鎘</th>
                                <th class="middle" colspan="1">總氮</th>
                                <th class="middle" colspan="1">總磷</th>
                                <th class="middle" colspan="1"></th>
                                <th class="middle" colspan="1"></th>
                                <tr style="background-color: #cce166;text-align: center;">

                                    <th class="middle" colspan="2">地點</th>
                                    <th class="middle">(mgC/L)</th>
                                    <th class="middle">(mg/L)</th>
                                    <th class="middle">(mg/L)</th>
                                    <th class="middle">(mg/L)</th>
                                    <th class="middle">(mgCaCO3/L)</th>
                                    <th class="middle">(mg/L)</th>
                                    <th class="middle">(mg/L)</th>
                                    <th class="middle">(mg/L)</th>
                                    <th class="middle">(mg/L)</th>
                                    <th class="middle">(mg/L)</th>
                                    <th class="middle">(mg/L)</th>
                                    <th class="middle">(mg/L)</th>
                                    <th class="middle">(mg/L)</th>
                                    <th class="middle">(mg/L)</th>
                                    <th class="middle">(mg/L)</th>
                                    <th class="middle">(mg/L)</th>
                                    <th class="middle">(°C)</th>
                                    <th class="middle">NTF</th>
                                    <th class="middle">(umho/cm)</th>
                                    <th class="middle">(umho/cm)</th>
                                    <th class="middle">(mg/L)</th>
                                    <th class="middle">(mg/L)</th>
                                    <th class="middle">(mg/L)</th>
                                    <th class="middle">(mg/L)</th>
                                    <th class="middle"></th>
                                    <th class="middle"></th>
                                </tr>        

                            </thead>
                            <tbody class="middle" style="text-align: center;">

                            </tbody>                           
                        </table>
                    </div>
            </center>

            <div class="modal fade" id="EditEngroundwaterInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog">
                        {!! Form::open(array('url'=>'/Admin/Environmentalprotection/AdminEnvMonitoring/edit','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
                        {{csrf_field()}}
                        <input type="hidden" name="id" >
                        <input type="hidden" name="title" value="engroundwater">
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
                                        <label class="control-label">*年度</label></br>
                                        <label id="edityeargroundwater"></label>
                                    </div>        
                                    <div class="col-lg-12 col-md-6 col-sm-6">
                                        <label class="control-label">*季別</label></br>
                                        <label id="editseasongroundwater"></label>
                                    </div>
                                    <div class="col-lg-12 col-md-6 col-sm-6">
                                        <label class="control-label">*廠別</label></br>
                                        <label id="groundwaterLocation"></label>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label" >*總有機碳</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Toc" required/>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*TDS</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TDS" required/>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*硫酸鹽</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Sulfate" required/>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*氯鹽</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="NaCl" required/>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*總硬度</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Totalhardness" required/>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*硝酸鹽氮</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Nitratenitrogen" required/>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*氨氮</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Ammonianitrogen" required/>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*鉛</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Pb" required/>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*鉻</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Cr" required/>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*錳</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Mn" required/>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*鐵</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Iron" required/>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*汞</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Hg" required/>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*砷</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="As" required/>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*鎳</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Ni" required/>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*鋅</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Zn" required/>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*銅</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Cu" required/>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*PH值</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="PHvalue" required/>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*溫度</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Temperature" required/>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*濁度</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Turbidity" required/>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*導電度</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Conductivity" required/>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*比導電度</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Specificconductivity" required/>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*油脂</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Grease" required/>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*鎘</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="Cd" required/>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*總氮</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalP" required/>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <label class="control-label">*總磷</label>
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="輸入內容" name="TotalN" required/>
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
            </div>

            <div class="modal fade" id="DelEngroundwaterInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    {!! Form::open(array('url'=>'/Admin/Environmentalprotection/AdminEnvMonitoring/delete','method'=>'POST','files'=>true,'class'=>'form-horizontal')) !!}
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
        </div>
    </div>
</div>

<script>
    $( document ).ready(function() {
        $('.enchange input[type="button"]').on('click',function(){
            $("#enname").text($(this).val());
            switch ($(this).val()) {
                case "煙道":
                $(".center-airquality,.center-noisevibration,.center-soil,.center-rawwater,.center-incineratorbottom,.center-flyash,.center-groundwater").css('display','none');
                $('.center-flue').css('display','block');
                break;
                case "原水":
                $(".center-airquality,.center-noisevibration,.center-soil,.center-flue,.center-incineratorbottom,.center-flyash,.center-groundwater").css('display','none');
                $('.center-rawwater').css('display','block');
                break;
                case "空氣監測":
                $(".center-flue,.center-noisevibration,.center-soil,.center-rawwater,.center-incineratorbottom,.center-flyash,.center-groundwater").css('display','none');
                $('.center-airquality').css('display','block');
                break;             
                case "噪音振動":
                $(".center-airquality,.center-flue,.center-soil,.center-rawwater,.center-incineratorbottom,.center-flyash,.center-groundwater").css('display','none');
                $('.center-noisevibration').css('display','block');
                break;
                case "土壤":
                $(".center-airquality,.center-noisevibration,.center-flue,.center-rawwater,.center-incineratorbottom,.center-flyash,.center-groundwater").css('display','none');
                $('.center-soil').css('display','block');
                break;
                case "TCLP飛灰":
                $(".center-flue,.center-airquality,.center-noisevibration,.center-soil,.center-rawwater,.center-incineratorbottom,.center-groundwater").css('display','none');
                $('.center-flyash').css('display','block');
                break;
                case "TCLP底渣":
                $(".center-airquality,.center-noisevibration,.center-soil,.center-rawwater,.center-flue,.center-flyash,.center-groundwater").css('display','none');
                $('.center-incineratorbottom').css('display','block');
                break;
                case "地下水":
                $(".center-flue,.center-airquality,.center-noisevibration,.center-soil,.center-rawwater,.center-incineratorbottom,.center-flyash").css('display','none');
                $('.center-groundwater').css('display','block');
                break;
            }
        });
        getYear();
        changeYear($("#changeyear").val());
        
        $('#changeyear').on('change',function(){
            $(".table-flue tbody,.table-airquality tbody,.table-noisevibration tbody,.table-soil tbody,.table-rawwater tbody,.table-incineratorbottom tbody,.table-flyash tbody,.table-groundwater tbody").html("");
            changeYear($(this).val());
        });
    });

    function getYear(){
        $("#changeyear").html("");
        var d = new Date().getFullYear();
        var years = [],addyears = [];
        //取得年份(+1年)
        for(var y=0; y<6; y++){
            years.push(d);
            d--;
        }
        $.each(years, function(index, element) {
            $("#changeyear").append("<option>"+ element +"</option>");
        });

        //新增年份
        var addy = new Date().getFullYear();
        for(var y=0; y<3; y++){
            addyears.push(addy);
            addy++;
        }
        $.each(addyears, function(index, element) {
            $("#addyearflue,#addyearairquality,#addyearnoisevibration,#addyearsoil,#addyearrawwater,#addyearincineratorbottom,#addyearflyash,#addyeargroundwater").append("<option>"+ element +"</option>");
        });
    }

    function changeYear(year){
        //table response data
        var enfluevalues = [],enairqualityvalues = [],ennoisevibrationvalues = [],ensoilvalues = [],enrawwatervalues = [],enincineratorbottomvalues = [],enflyashvalues = [],engroundwatervalues = [];
        
        //煙道
        var enfluejson = @json($data['enflue']);
        for(var i = 0; i < enfluejson.length; i++){
            if(enfluejson[i].Year==year){
                enfluevalues.push(enfluejson[i]);
            }
        }
        var enflueTable = $(".table-flue tbody");
        $.each(enfluevalues, function(index, element) {
            enflueTable.append("<tr>" +
                "<td class=''>第"+ element.Season +"季</td>"+
                "<td class='Location'>"+ element.Location +"</td>"+
                "<td class='Granular'>"+ element.Granular +"</td>"+
                "<td class='Sulfurdioxide'>"+ element.Sulfurdioxide +"</td>"+
                "<td class='Nitroxides'>"+ element.Nitroxides +"</td>"+
                "<td class='Carbonmonoxide'>"+ element.Carbonmonoxide +"</td>"+
                "<td class='Hydrogenchloride'>"+ element.Hydrogenchloride +"</td>"+
                "<td class='Pb'>"+ element.Pb +"</td>"+
                "<td class='Cd'>"+ element.Cd +"</td>"+
                "<td class='Hg'>"+ element.Hg +"</td>"+
                "<td style='display:none;' class='Season'>"+ element.Season +"</td>"+
                "<td data-th='修改' style='text-align: right;'>"+
                "<button class='btn btnn btn-default flueedit' data-toggle='modal' data-id="+ element.id +" data-target='#EditFlueInfo'>編輯</button>"+
                "<button class='btn btn-default enfluedel' data-toggle='modal' data-id="+ element.id +" data-target='#DelFlueInfo'>刪除</button>"+
                "<td>"+
                "</tr>");
        });

        //欄位合併
        $(".table-flue td:nth-child(1):eq(0),.table-flue td:nth-child(1):eq(3),.table-flue td:nth-child(1):eq(6),.table-flue td:nth-child(1):eq(9)").attr( "rowspan", "3" );
        $(".table-flue td:nth-child(1):eq(1),.table-flue td:nth-child(1):eq(2),.table-flue td:nth-child(1):eq(4),.table-flue td:nth-child(1):eq(5),.table-flue td:nth-child(1):eq(7),.table-flue td:nth-child(1):eq(8),.table-flue td:nth-child(1):eq(10),.table-flue td:nth-child(1):eq(11)").remove();

        //編輯資料
        $('.flueedit').on("click", function () {
            var tr = $(this).closest('tr');
            $('#edityearflue').text(year);
            $('#flueLocation').text(tr.find(".Location").text());
            $('#editseasonflue').text(tr.find(".Season").text());
            $("#EditFlueInfo").find("input[name='id']").val($(this).attr('data-id'));
            $("#EditFlueInfo").find("input[name='Granular']").val(tr.find(".Granular").text());
            $("#EditFlueInfo").find("input[name='Sulfurdioxide']").val(tr.find(".Sulfurdioxide").text());
            $("#EditFlueInfo").find("input[name='Nitroxides']").val(tr.find(".Nitroxides").text());
            $("#EditFlueInfo").find("input[name='Carbonmonoxide']").val(tr.find(".Carbonmonoxide").text());
            $("#EditFlueInfo").find("input[name='Hydrogenchloride']").val(tr.find(".Hydrogenchloride").text());
            $("#EditFlueInfo").find("input[name='Pb']").val(tr.find(".Pb").text());
            $("#EditFlueInfo").find("input[name='Cd']").val(tr.find(".Cd").text());
            $("#EditFlueInfo").find("input[name='Hg']").val(tr.find(".Hg").text());
        });

        //原水
        var enrawwaterjson = @json($data['enrawwater']);
        for(var i = 0; i < enrawwaterjson.length; i++){
            if(enrawwaterjson[i].Year==year){
                enrawwatervalues.push(enrawwaterjson[i]);
            }
        }
        var rawwaterTable = $(".table-rawwater tbody");
        $.each(enrawwatervalues, function(index, element) {
            rawwaterTable.append("<tr>" +
                "<td class='middle'>第"+ element.Season +"季</td>"+
                "<td class='middle Location'>"+ element.Location +"</td>"+
                "<td class='middle Watertemperature'>"+ element.Watertemperature +"</td>"+
                "<td class='middle PHvalue'>"+ element.PHvalue +"</td>"+
                "<td class='middle Suspendedsolids'>"+ element.Suspendedsolids +"</td>"+
                "<td class='middle COD'>"+ element.COD +"</td>"+
                "<td class='middle Coliform'>"+ element.Coliform +"</td>"+
                "<td style='display:none;' class='Season'>"+ element.Season +"</td>"+
                "<td data-th='修改' style='text-align: right;'>"+
                "<button class='btn btnn btn-default rawwateredit' data-toggle='modal' data-id="+ element.id +" data-target='#EditRawwaterInfo'>編輯</button>"+
                "<button class='btn btn-default opendel' data-toggle='modal' data-id="+ element.id +" data-target='#EditRawwaterInfo'>刪除</button>"+
                "<td>"+
                "</tr>");
        });

        //編輯資料
        $('.rawwateredit').on("click", function () {
            var tr = $(this).closest('tr');
            $('#edityearrawwater').text(year);
            $('#editseasonrawwater').text(tr.find(".Season").text());
            $("#EditRawwaterInfo").find("input[name='id']").val($(this).attr('data-id'));
            $("#EditRawwaterInfo").find("input[name='Location']").val(tr.find(".Location").text());
            $("#EditRawwaterInfo").find("input[name='Watertemperature']").val(tr.find(".Watertemperature").text());
            $("#EditRawwaterInfo").find("input[name='PHvalue']").val(tr.find(".PHvalue").text());
            $("#EditRawwaterInfo").find("input[name='Suspendedsolids']").val(tr.find(".Suspendedsolids").text());
            $("#EditRawwaterInfo").find("input[name='COD']").val(tr.find(".COD").text());
            $("#EditRawwaterInfo").find("input[name='Coliform']").val(tr.find(".Coliform").text());
        });
        //空氣監測
        var enairqualityjson = @json($data['enairquality']);
        for(var i = 0; i < enairqualityjson.length; i++){
            if(enairqualityjson[i].Year==year){
                enairqualityvalues.push(enairqualityjson[i]);
            }
        }
        var airqualityTable = $(".table-airquality tbody");
        $.each(enairqualityvalues, function(index, element) {
            airqualityTable.append("<tr>" +
                "<td class='middle'>第"+ element.Season +"季</td>"+
                "<td class='middle Location'>"+ element.Location +"</td>"+
                "<td class='middle Windspeed'>"+ element.Windspeed +"</td>"+
                "<td class='middle Winddirection'>"+ element.Winddirection +"</td>"+
                "<td class='middle Humidity'>"+ element.Humidity +"</td>"+
                "<td class='middle Temperature'>"+ element.Temperature +"</td>"+
                "<td class='middle TSP'>"+ element.TSP +"</td>"+
                "<td class='middle SO2'>"+ element.SO2 +"</td>"+
                "<td class='middle NOx'>"+ element.NOx +"</td>"+
                "<td class='middle CO'>"+ element.CO +"</td>"+
                "<td class='middle THC'>"+ element.THC +"</td>"+
                "<td class='middle CH4'>"+ element.CH4 +"</td>"+
                "<td class='middle NMHC'>"+ element.NMHC +"</td>"+
                "<td class='middle PM10'>"+ element.PM10 +"</td>"+
                "<td class='middle PM25'>"+ element.PM25 +"</td>"+
                "<td style='display:none;' class='Season'>"+ element.Season +"</td>"+
                "<td data-th='修改' style='text-align: right;'>"+
                "<button class='btn btnn btn-default airqualityedit' data-toggle='modal' data-id="+ element.id +" data-target='#EditAirqualityInfo'>編輯</button>"+
                "<button class='btn btn-default airqualitydel' data-toggle='modal' data-id="+ element.id +" data-target='#EditAirqualityInfo'>刪除</button>"+
                "<td>"+
                "</tr>");
        });
 
        //編輯資料
        $('.airqualityedit').on("click", function () {
            var tr = $(this).closest('tr');
            $('#edityearairquality').text(year);
            $('#editseasonairquality').text(tr.find(".Season").text());
            $("#EditAirqualityInfo").find("input[name='id']").val($(this).attr('data-id'));
            $("#EditAirqualityInfo").find("input[name='Location']").val(tr.find(".Location").text());
            $("#EditAirqualityInfo").find("input[name='Windspeed']").val(tr.find(".Windspeed").text());
            $("#EditAirqualityInfo").find("input[name='Winddirection']").val(tr.find(".Winddirection").text());
            $("#EditAirqualityInfo").find("input[name='Humidity']").val(tr.find(".Humidity").text());
            $("#EditAirqualityInfo").find("input[name='Temperature']").val(tr.find(".Temperature").text());
            $("#EditAirqualityInfo").find("input[name='TSP']").val(tr.find(".TSP").text());
            $("#EditAirqualityInfo").find("input[name='SO2']").val(tr.find(".SO2").text());
            $("#EditAirqualityInfo").find("input[name='NOx']").val(tr.find(".NOx").text());
            $("#EditAirqualityInfo").find("input[name='CO']").val(tr.find(".CO").text());
            $("#EditAirqualityInfo").find("input[name='THC']").val(tr.find(".THC").text());
            $("#EditAirqualityInfo").find("input[name='CH4']").val(tr.find(".CH4").text());
            $("#EditAirqualityInfo").find("input[name='NMHC']").val(tr.find(".NMHC").text());
            $("#EditAirqualityInfo").find("input[name='PM10']").val(tr.find(".PM10").text());
            $("#EditAirqualityInfo").find("input[name='PM25']").val(tr.find(".PM25").text());
        });

        //噪音振動
        var ennoisevibrationjson = @json($data['ennoisevibration']);
        for(var i = 0; i < ennoisevibrationjson.length; i++){
            if(ennoisevibrationjson[i].Year==year){
                ennoisevibrationvalues.push(ennoisevibrationjson[i]);
            }
        }
        var noisevibrationTable = $(".table-noisevibration tbody");
        $.each(ennoisevibrationvalues, function(index, element) {
            noisevibrationTable.append("<tr>" +
                "<td class='middle'>第"+ element.Season +"季</td>"+
                "<td class='middle Location'>"+ element.Location +"</td>"+
                "<td class='middle Lmorning'>"+ element.Lmorning +"</td>"+
                "<td class='middle Levening'>"+ element.Levening +"</td>"+
                "<td class='middle Lnight'>"+ element.Lnight +"</td>"+
                "<td class='middle Lvmorning'>"+ element.Lvmorning +"</td>"+
                "<td class='middle Lvnight'>"+ element.Lvnight +"</td>"+
                "<td style='display:none;' class='Season'>"+ element.Season +"</td>"+
                "<td data-th='修改' style='text-align: right;'>"+
                "<button class='btn btnn btn-default noisevibrationedit' data-toggle='modal' data-id="+ element.id +" data-target='#EditNoisevibrationInfo'>編輯</button>"+
                "<button class='btn btn-default noisevibrationdel' data-toggle='modal' data-id="+ element.id +" data-target='#EditNoisevibrationInfo'>刪除</button>"+
                "<td>"+
                "</tr>");
        });

        //編輯資料
        $('.noisevibrationedit').on("click", function () {
            var tr = $(this).closest('tr');
            $('#edityearnoisevibration').text(year);
            $('#editseasonnoisevibration').text(tr.find(".Season").text());
            $("#EditNoisevibrationInfo").find("input[name='id']").val($(this).attr('data-id'));
            $("#EditNoisevibrationInfo").find("input[name='Location']").val(tr.find(".Location").text());
            $("#EditNoisevibrationInfo").find("input[name='Lmorning']").val(tr.find(".Lmorning").text());
            $("#EditNoisevibrationInfo").find("input[name='Levening']").val(tr.find(".Levening").text());
            $("#EditNoisevibrationInfo").find("input[name='Lnight']").val(tr.find(".Lnight").text());
            $("#EditNoisevibrationInfo").find("input[name='Lvmorning']").val(tr.find(".Lvmorning").text());
            $("#EditNoisevibrationInfo").find("input[name='Lvnight']").val(tr.find(".Lvnight").text());
        });
        //土壤
        var ensoiljson = @json($data['ensoil']);
        for(var i = 0; i < ensoiljson.length; i++){
            if(ensoiljson[i].Year==year){
                ensoilvalues.push(ensoiljson[i]);
            }
        }
        var soilTable = $(".table-soil tbody");
        $.each(ensoilvalues, function(index, element) {
            soilTable.append("<tr>" +
                "<td class='middle Location'>"+ element.Location +"</td>"+
                "<td class='middle Pb'>"+ element.Pb +"</td>"+
                "<td class='middle Cd'>"+ element.Cd +"</td>"+
                "<td class='middle Hg'>"+ element.Hg +"</td>"+
                "<td data-th='修改' style='text-align: right;'>"+
                "<button class='btn btnn btn-default soiledit' data-toggle='modal' data-id="+ element.id +" data-target='#EditSoilInfo'>編輯</button>"+
                "<button class='btn btn-default soildel' data-toggle='modal' data-id="+ element.id +" data-target='#EditSoilInfo'>刪除</button>"+
                "<td>"+
                "</tr>");
        });

        //編輯資料
        $('.soiledit').on("click", function () {
            var tr = $(this).closest('tr');
            $('#edityearsoil').text(year);
            $('#soilLocation').text(tr.find(".Location").text());
            $("#EditSoilInfo").find("input[name='id']").val($(this).attr('data-id'));
            $("#EditSoilInfo").find("input[name='Pb']").val(tr.find(".Pb").text());
            $("#EditSoilInfo").find("input[name='Cd']").val(tr.find(".Cd").text());
            $("#EditSoilInfo").find("input[name='Hg']").val(tr.find(".Hg").text());
        });

        //TCLP飛灰
        var enflyashjson = @json($data['enflyash']);
        for(var i = 0; i < enflyashjson.length; i++){
            if(enflyashjson[i].Year==year){
                enflyashvalues.push(enflyashjson[i]);
            }
        }
        var enflyashTable = $(".table-flyash tbody");
        $.each(enflyashvalues, function(index, element) {
            enflyashTable.append("<tr>" +
               "<td class='middle'>"+ element.Season +"</td>"+
               "<td class='middle Location'>"+ element.Location +"</td>"+
               "<td class='middle Type'>"+ element.Type +"</td>"+
               "<td class='middle Cr6'>"+ element.Cr6 +"</td>"+
               "<td class='middle TotalCd'>"+ element.TotalCd +"</td>"+
               "<td class='middle TotalCr'>"+ element.TotalCr +"</td>"+
               "<td class='middle TotalCu'>"+ element.TotalCu +"</td>"+
               "<td class='middle TotalPb'>"+ element.TotalPb +"</td>"+
               "<td class='middle TotalBa'>"+ element.TotalBa +"</td>"+
               "<td class='middle TotalAs'>"+ element.TotalAs +"</td>"+
               "<td class='middle TotalHg'>"+ element.TotalHg +"</td>"+
               "<td class='middle TotalSe'>"+ element.TotalSe +"</td>"+
               "<td style='display:none;' class='Season'>"+ element.Season +"</td>"+
               "<td data-th='修改' style='text-align: right;'>"+
               "<button class='btn btnn btn-default flyashedit' data-toggle='modal' data-id="+ element.id +" data-target='#EditFlyashInfo'>編輯</button>"+
               "<button class='btn btn-default flyashdel' data-toggle='modal' data-id="+ element.id +" data-target='#DelFlyashInfo'>刪除</button>"+
               "<td>"+
               "</tr>");
        });

        //欄位合併
        $(".table-flyash td:nth-child(1):eq(0),.table-flyash td:nth-child(1):eq(3),.table-flyash td:nth-child(1):eq(6),.table-flyash td:nth-child(1):eq(9)").attr( "rowspan", "3" );
        $(".table-flyash td:nth-child(1):eq(1),.table-flyash td:nth-child(1):eq(2),.table-flyash td:nth-child(1):eq(4),.table-flyash td:nth-child(1):eq(5),.table-flyash td:nth-child(1):eq(7),.table-flyash td:nth-child(1):eq(8),.table-flyash td:nth-child(1):eq(10),.table-flyash td:nth-child(1):eq(11)").remove();
        
        //編輯資料
        $('.flyashedit').on("click", function () {
            var tr = $(this).closest('tr');
            $('#edityearflyash').text(year);
            $('#editseasonflyash').text(tr.find(".Season").text());
            $('#flyashLocation').text(tr.find(".Location").text());
            $("#EditFlyashInfo").find("input[name='id']").val($(this).attr('data-id'));
            $("#EditFlyashInfo").find("input[name='Type']").val(tr.find(".Type").text());
            $("#EditFlyashInfo").find("input[name='Cr6']").val(tr.find(".Cr6").text());
            $("#EditFlyashInfo").find("input[name='TotalCd']").val(tr.find(".TotalCd").text());
            $("#EditFlyashInfo").find("input[name='TotalCr']").val(tr.find(".TotalCr").text());
            $("#EditFlyashInfo").find("input[name='TotalCu']").val(tr.find(".TotalCu").text());
            $("#EditFlyashInfo").find("input[name='TotalPb']").val(tr.find(".TotalPb").text());
            $("#EditFlyashInfo").find("input[name='TotalBa']").val(tr.find(".TotalBa").text());
            $("#EditFlyashInfo").find("input[name='TotalAs']").val(tr.find(".TotalAs").text());
            $("#EditFlyashInfo").find("input[name='TotalHg']").val(tr.find(".TotalHg").text());
            $("#EditFlyashInfo").find("input[name='TotalSe']").val(tr.find(".TotalSe").text());
        });

        //TCLP底渣
        var enincineratorbottomjson = @json($data['enincineratorbottom']);
        for(var i = 0; i < enincineratorbottomjson.length; i++){
            if(enincineratorbottomjson[i].Year==year){
                enincineratorbottomvalues.push(enincineratorbottomjson[i]);
            }
        }
        var incineratorbottomTable = $(".table-incineratorbottom tbody");
        $.each(enincineratorbottomvalues, function(index, element) {
            incineratorbottomTable.append("<tr>" +
                "<td class='middle'>"+ element.Season +"</td>"+
                "<td class='middle Location'>"+ element.Location +"</td>"+
                "<td class='middle Type'>"+ element.Type +"</td>"+
                "<td class='middle Cr6'>"+ element.Cr6 +"</td>"+
                "<td class='middle TotalCd'>"+ element.TotalCd +"</td>"+
                "<td class='middle TotalCr'>"+ element.TotalCr +"</td>"+
                "<td class='middle TotalCu'>"+ element.TotalCu +"</td>"+
                "<td class='middle TotalPb'>"+ element.TotalPb +"</td>"+
                "<td class='middle TotalBa'>"+ element.TotalBa +"</td>"+
                "<td class='middle TotalAs'>"+ element.TotalAs +"</td>"+
                "<td class='middle TotalHg'>"+ element.TotalHg +"</td>"+
                "<td class='middle TotalSe'>"+ element.TotalSe +"</td>"+
                "<td style='display:none;' class='Season'>"+ element.Season +"</td>"+
                "<td data-th='修改' style='text-align: right;'>"+
                "<button class='btn btnn btn-default ineratorbottomedit' data-toggle='modal' data-id="+ element.id +" data-target='#EditIncineratorbottomInfo'>編輯</button>"+
                "<button class='btn btn-default ineratorbottomdel' data-toggle='modal' data-id="+ element.id +" data-target='#EditIncineratorbottomInfo'>刪除</button>"+
                "<td>"+
                "</tr>");
        });

        //欄位合併
        $(".table-incineratorbottom td:nth-child(1):eq(0),.table-incineratorbottom td:nth-child(1):eq(3)").attr( "rowspan", "3" );
        $(".table-incineratorbottom td:nth-child(1):eq(1),.table-incineratorbottom td:nth-child(1):eq(2),.table-incineratorbottom td:nth-child(1):eq(4),.table-incineratorbottom td:nth-child(1):eq(5)").remove();

        //編輯資料
        $('.ineratorbottomedit').on("click", function () {
            var tr = $(this).closest('tr');
            $('#edityearincineratorbottom').text(year);
            $('#editseasonincineratorbottom').text(tr.find(".Season").text());
            $('#incineratorbottomLocation').text(tr.find(".Location").text());
            $("#EditIncineratorbottomInfo").find("input[name='id']").val($(this).attr('data-id'));
            $("#EditIncineratorbottomInfo").find("input[name='Type']").val(tr.find(".Type").text());
            $("#EditIncineratorbottomInfo").find("input[name='Cr6']").val(tr.find(".Cr6").text());
            $("#EditIncineratorbottomInfo").find("input[name='TotalCd']").val(tr.find(".TotalCd").text());
            $("#EditIncineratorbottomInfo").find("input[name='TotalCr']").val(tr.find(".TotalCr").text());
            $("#EditIncineratorbottomInfo").find("input[name='TotalCu']").val(tr.find(".TotalCu").text());
            $("#EditIncineratorbottomInfo").find("input[name='TotalPb']").val(tr.find(".TotalPb").text());
            $("#EditIncineratorbottomInfo").find("input[name='TotalBa']").val(tr.find(".TotalBa").text());
            $("#EditIncineratorbottomInfo").find("input[name='TotalAs']").val(tr.find(".TotalAs").text());
            $("#EditIncineratorbottomInfo").find("input[name='TotalHg']").val(tr.find(".TotalHg").text());
            $("#EditIncineratorbottomInfo").find("input[name='TotalSe']").val(tr.find(".TotalSe").text());
        });

        //地下水
        var engroundwaterjson = @json($data['engroundwater']);
        for(var i = 0; i < engroundwaterjson.length; i++){
            if(engroundwaterjson[i].Year==year){
                engroundwatervalues.push(engroundwaterjson[i]);
            }
        }
        var engroundwaterTable = $(".table-groundwater tbody");
        $.each(engroundwatervalues, function(index, element) {
            engroundwaterTable.append("<tr>" +
                "<td class='middle' style='background-color: #AACD03;border: 1px solid #AACD03;'>第"+ element.Season +"季</td>"+
                "<td class='middle Location' style='border: 1px solid #aacd03;'>"+ element.Location +"</td>"+
                "<td class='middle Toc'>"+ element.Toc +"</td>"+
                "<td class='middle TDS'>"+ element.TDS +"</td>"+
                "<td class='middle Sulfate'>"+ element.Sulfate +"</td>"+
                "<td class='middle NaCl'>"+ element.NaCl +"</td>"+
                "<td class='middle Totalhardness'>"+ element.Totalhardness +"</td>"+
                "<td class='middle Nitratenitrogen'>"+ element.Nitratenitrogen +"</td>"+
                "<td class='middle Ammonianitrogen'>"+ element.Ammonianitrogen +"</td>"+
                "<td class='middle Pb'>"+ element.Pb +"</td>"+
                "<td class='middle Cr'>"+ element.Cr +"</td>"+
                "<td class='middle Mn'>"+ element.Mn +"</td>"+
                "<td class='middle Iron'>"+ element.Iron +"</td>"+
                "<td class='middle Hg'>"+ element.Hg +"</td>"+
                "<td class='middle As'>"+ element.As +"</td>"+
                "<td class='middle Ni'>"+ element.Ni +"</td>"+
                "<td class='middle Zn'>"+ element.Zn +"</td>"+
                "<td class='middle Cu'>"+ element.Cu +"</td>"+
                "<td class='middle PHvalue'>"+ element.PHvalue +"</td>"+
                "<td class='middle Temperature'>"+ element.Temperature +"</td>"+
                "<td class='middle Turbidity'>"+ element.Turbidity +"</td>"+
                "<td class='middle Conductivity'>"+ element.Conductivity +"</td>"+
                "<td class='middle Specificconductivity'>"+ element.Specificconductivity +"</td>"+
                "<td class='middle Grease'>"+ element.Grease +"</td>"+
                "<td class='middle Cd'>"+ element.Cd +"</td>"+
                "<td class='middle TotalN'>"+ element.TotalN +"</td>"+
                "<td class='middle TotalP'>"+ element.TotalP +"</td>"+
                "<td style='display:none;' class='Season'>"+ element.Season +"</td>"+
                "<td data-th='修改' style='text-align: right;'>"+
                "<button class='btn btnn btn-default groundwateredit' data-toggle='modal' data-id="+ element.id +" data-target='#EditEngroundwaterInfo'>編輯</button>"+
                "<button class='btn btn-default groundwaterdel' data-toggle='modal' data-id="+ element.id +" data-target='#DelEngroundwaterInfo'>刪除</button>"+
                "<td>"+
                "</tr>");
        });

        //欄位合併
        $(".table-groundwater td:nth-child(1):eq(0),.table-groundwater td:nth-child(1):eq(2),.table-groundwater td:nth-child(1):eq(4),.table-groundwater td:nth-child(1):eq(6)").attr( "rowspan", "2" );
        $(".table-groundwater td:nth-child(1):eq(1),.table-groundwater td:nth-child(1):eq(3),.table-groundwater td:nth-child(1):eq(5),.table-groundwater td:nth-child(1):eq(7)").remove();

        //編輯資料
        $('.groundwateredit').on("click", function () {
            var tr = $(this).closest('tr');
            $('#edityeargroundwater').text(year);
            $('#editseasongroundwater').text(tr.find(".Season").text());
            $('#groundwaterLocation').text(tr.find(".Location").text());
            $("#EditEngroundwaterInfo").find("input[name='id']").val($(this).attr('data-id'));
            $("#EditEngroundwaterInfo").find("input[name='Toc']").val(tr.find(".Toc").text());
            $("#EditEngroundwaterInfo").find("input[name='TDS']").val(tr.find(".TDS").text());
            $("#EditEngroundwaterInfo").find("input[name='Sulfate']").val(tr.find(".Sulfate").text());
            $("#EditEngroundwaterInfo").find("input[name='NaCl']").val(tr.find(".NaCl").text());
            $("#EditEngroundwaterInfo").find("input[name='Totalhardness']").val(tr.find(".Totalhardness").text());
            $("#EditEngroundwaterInfo").find("input[name='Nitratenitrogen']").val(tr.find(".Nitratenitrogen").text());
            $("#EditEngroundwaterInfo").find("input[name='Ammonianitrogen']").val(tr.find(".Ammonianitrogen").text());
            $("#EditEngroundwaterInfo").find("input[name='Pb']").val(tr.find(".Pb").text());
            $("#EditEngroundwaterInfo").find("input[name='Cr']").val(tr.find(".Cr").text());
            $("#EditEngroundwaterInfo").find("input[name='Mn']").val(tr.find(".Mn").text());
            $("#EditEngroundwaterInfo").find("input[name='Iron']").val(tr.find(".Iron").text());
            $("#EditEngroundwaterInfo").find("input[name='Hg']").val(tr.find(".Hg").text());
            $("#EditEngroundwaterInfo").find("input[name='As']").val(tr.find(".As").text());
            $("#EditEngroundwaterInfo").find("input[name='Ni']").val(tr.find(".Ni").text());
            $("#EditEngroundwaterInfo").find("input[name='Zn']").val(tr.find(".Zn").text());
            $("#EditEngroundwaterInfo").find("input[name='Cu']").val(tr.find(".Cu").text());
            $("#EditEngroundwaterInfo").find("input[name='PHvalue']").val(tr.find(".PHvalue").text());
            $("#EditEngroundwaterInfo").find("input[name='Temperature']").val(tr.find(".Temperature").text());
            $("#EditEngroundwaterInfo").find("input[name='Turbidity']").val(tr.find(".Turbidity").text());
            $("#EditEngroundwaterInfo").find("input[name='Conductivity']").val(tr.find(".Conductivity").text());
            $("#EditEngroundwaterInfo").find("input[name='Specificconductivity']").val(tr.find(".Specificconductivity").text());
            $("#EditEngroundwaterInfo").find("input[name='Grease']").val(tr.find(".Grease").text());
            $("#EditEngroundwaterInfo").find("input[name='Cd']").val(tr.find(".Cd").text());
            $("#EditEngroundwaterInfo").find("input[name='TotalN']").val(tr.find(".TotalN").text());
            $("#EditEngroundwaterInfo").find("input[name='TotalP']").val(tr.find(".TotalP").text());
        });
    }
</script>
@endsection