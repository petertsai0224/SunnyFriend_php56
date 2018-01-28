<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Http\Model\PotatoMagazine;
use App\Http\Model\CSRMagazine;
use Validator;

class CorporateSocialResponsibilityController extends Controller
{
    //土豆鳥文學誌
    public function index()
    {        
        $potatomagazine = PotatoMagazine::all();
        return view('CorporateSocialResponsibility.VanellusLiterature')->with('data',$potatomagazine);
    }

    //企業社會責任報告書
    public function csr()
    {        
        $csrmagazine = CSRMagazine::all();
        return view('CorporateSocialResponsibility.CSRReport')->with('data',$csrmagazine);
    }

    //後台土豆鳥文學誌 首頁
    public function AdminPotatoIndex(){        
        $potatomagazine = PotatoMagazine::orderBy('id', 'desc')->get();
        return view('Admin.CorporateSocialResponsibility.AdminVanellusLiterature')->with('data',$potatomagazine);
    }

    //後台土豆鳥文學誌 新增
    public function AdminPotatoCreate(Request $request){
        $message=[
            'file.mimes'=> '請上傳PDF',
            'image.mimes'=> '請上傳圖片必須為 jpeg, png, jpg, gif, svg 的檔案'
        ];

        $this->validate($request, [
            'file'=> 'required|mimes:pdf',
            'image'=>'required|mimes:jpeg,png,jpg,gif,svg',
        ],$message);
        
        $file = $request->file('file');
        $image = $request->file('image');       
        
        //File Rename
        $newImgName = date("YmdHis").'img.'.$image->getClientOriginalExtension();
        $newFileName = date("YmdHis").'file.'.$file->getClientOriginalExtension();

        $potatomagazine = new PotatoMagazine;
        $potatomagazine->OriImageName = $image->getClientOriginalName();
        $potatomagazine->ImageName = $newImgName;
        $potatomagazine->OriFileName = $file->getClientOriginalName();
        $potatomagazine->FileName = $newFileName;
        $potatomagazine->save();
        
        //Uploaded File Path
        $destinationPath = 'assets\images\CorporateSocialResponsibility\土豆鳥雜誌';
        //Move Uploaded File
        //$image->move($destinationPath,$newImgName);
        //$file->move($destinationPath,$newFileName);

        return redirect()->back()->with(['status' => 'success','message' => '新增成功']);
    }

    //後台土豆鳥文學誌 刪除
    public function AdminPotatoDelete(){
        $input=Input::all();
        $re=PotatoMagazine::where('id',$input['id'])->delete();

        if($re){
            return redirect()->back()->with(['status' => 'success','message' => '刪除成功']);
        }else{
            return redirect()->back()->with(['status' => 'failed','message' => '刪除失敗']);
        }
        
    }

    //後台企業社會責任報告書 首頁
    public function AdminCsrIndex(){        
        $csrmagazine = CSRMagazine::orderBy('id', 'desc')->get();
        return view('Admin.CorporateSocialResponsibility.CSRReport')->with('data',$csrmagazine);
    }

    //後台企業社會責任報告書 新增
    public function AdminCsrCreate(Request $request){
        $message=[
            'file.mimes'=> '請上傳PDF',
            'image.mimes'=> '請上傳圖片必須為 jpeg, png, jpg, gif, svg 的檔案'
        ];

        $this->validate($request, [
            'file'=> 'required|mimes:pdf',
            'image'=>'required|mimes:jpeg,png,jpg,gif,svg',
        ],$message);
        
        $file = $request->file('file');
        $image = $request->file('image');
          
        //File Rename
        $newImgName = date("YmdHis").'img.'.$image->getClientOriginalExtension();
        $newFileName = date("YmdHis").'file.'.$file->getClientOriginalExtension();

        $csrmagazine = new CSRMagazine;
        $csrmagazine->OriImageName = $image->getClientOriginalName();
        $csrmagazine->ImageName = $newImgName;
        $csrmagazine->OriFileName = $file->getClientOriginalName();
        $csrmagazine->FileName = $newFileName;
        $csrmagazine->save();
        
        //Uploaded File Path
        $destinationPath = 'assets\images\CorporateSocialResponsibility\csr報告書';
        //Move Uploaded File
        $image->move($destinationPath,$newImgName);
        $file->move($destinationPath,$newFileName);

        return redirect()->back()->with(['status' => 'success','message' => '新增成功']);
    }

    //後台企業社會責任報告書 刪除
    public function AdminCsrDelete(){
        $input=Input::all();
        $re=CSRMagazine::where('id',$input['id'])->delete();

        if($re){
            return redirect()->back()->with(['status' => 'success','message' => '刪除成功']);
        }else{
            return redirect()->back()->with(['status' => 'failed','message' => '刪除失敗']);
        }
        
    }
}
