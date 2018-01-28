<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Model\LatestNews;
use Illuminate\Support\Facades\Input;
use Validator;

class NewsController extends Controller
{
    //最新消息首頁
    public function index()
    {        
        $latestnews = LatestNews::all();
        return view('News.latestNews')->with('data',$latestnews);
    }

    //內容頁
    public function detail($id)
    {        
        $newsdetail = LatestNews::find($id);
        return view('News.news-subindex')->with('data',$newsdetail);
    }

    //後台最新消息 首頁
    public function AdminNewsIndex(){        
        $latestnews = LatestNews::orderBy('id', 'desc')->get();
        return view('Admin.News.AdminNews')->with('data',$latestnews);
    }

    //後台最新消息 新增
    public function AdminNewsCreate(Request $request){
        /**/

        $input = Input::all();
        $file = $request->file('file');

        $rules =[
            'date'=> 'required|date_format:Y-m-d',
            'title'=> 'required',
            'content'=> 'required|max:1000',
            'file'=> 'required|mimes:pdf',
        ];

        $message=[
            'date.required'=> '日期不能為空白',
            'title.required'=> '標題不能為空白',
            'content.required'=> '內容不能為空白',
            'file.required'=> '檔案不能為空白',
            'content.max'=> '內容最多為1000字',
            'file.mimes'=> '上傳檔案為PDF檔',
        ];

        $Validator=Validator::make($input,$rules,$message);
        
        if($Validator->passes()){
            //Move Uploaded File
            $newFileName = date("YmdHis").'file.'.$file->getClientOriginalExtension();
        
            //Uploaded File Path 待修改
            $destinationPath = 'assets\images\CorporateGovernance';

            $latestnews = new LatestNews;
            $latestnews->Date = $input['date'];
            $latestnews->Title = $input['title'];
            $latestnews->Content = $input['content'];
            $latestnews->FileName = $file->getClientOriginalName();
            $latestnews->FilePath = $newFileName;
            $latestnews->save();
                 
            $file->move($destinationPath,$newFileName);
        
            return redirect()->back()->with(['status' => 'success','message' => '新增成功']);
        }else{
            return back()->withErrors($Validator);
        }
    }

    //後台最新消息 編輯
    public function AdminNewsEdit(Request $request){
        $file = $request->file('file');

        $rules =[
            'date'=> 'required|date_format:Y-m-d',
            'title'=> 'required',
            'content'=> 'required|max:1000',
            'file'=> 'mimes:pdf',
        ];

        $message=[
            'date.required'=> '日期不能為空白',
            'title.required'=> '標題不能為空白',
            'content.required'=> '內容不能為空白',
            'content.max'=> '內容最多為1000字',
            'file.mimes'=> '上傳檔案為PDF檔',
        ];

        $input=Input::all();
        $Validator=Validator::make($input,$rules,$message);
        $latestnews = LatestNews::find($input['id']);
        
        if($Validator->passes()){
            if($file==NULL){
                $latestnews->Date = $input['date'];
                $latestnews->Title = $input['title'];
                $latestnews->Content = $input['content'];
                $latestnews->save();
            }else{
                $newFileName = date("YmdHis").'file.'.$file->getClientOriginalExtension();
                $destinationPath = 'assets\images\CorporateGovernance';
                $latestnews->Date = $input['date'];
                $latestnews->Title = $input['title'];
                $latestnews->Content = $input['content'];
                $latestnews->FileName = $file->getClientOriginalName();
                $latestnews->FilePath = $newFileName;
                $latestnews->save();      
                $file->move($destinationPath,$newFileName);     
            }           
            
            return redirect()->back()->with(['status' => 'success','message' => '編輯成功']);
        }else{
            return back()->withErrors($Validator);
        }

        
        return redirect()->back()->with(['status' => 'success','message' => '編輯成功']);
    }

    //後台最新消息 刪除
    public function AdminNewsDelete(){
        $input=Input::all();
        $re=LatestNews::where('id',$input['id'])->delete();

        if($re){
            return redirect()->back()->with(['status' => 'success','message' => '刪除成功']);
        }else{
            return redirect()->back()->with(['status' => 'failed','message' => '刪除失敗']);
        }
        
    }
}
