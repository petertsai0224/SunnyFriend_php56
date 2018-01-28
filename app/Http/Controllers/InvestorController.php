<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Http\Model\ShareholdersInfo;
use App\Http\Model\RevenueInfo;
use App\Http\Model\FinanceInfo;
use Validator;

class InvestorController extends Controller
{
    //股東會相關資訊 首頁
    public function shareholders()
    {        
        $shareholdersinfo = ShareholdersInfo::all();
        return view('Investor.IFSM')->with('data',$shareholdersinfo);
    }

    //營收公告 首頁
    public function revenue()
    {        
        $revenueinfo = RevenueInfo::orderBy('Month', 'asc')->get();
        return view('Investor.MonthlyRevenue')->with('data',$revenueinfo);
    }

    //財務資訊 首頁
    public function finance()
    {        
        $financeinfo = FinanceInfo::all();
        return view('Investor.FinancialInformation')->with('data',$financeinfo);
    }

    //後台股東會相關資訊 首頁
    public function AdminShareholdersIndex(){        
        $shareholdersinfo = ShareholdersInfo::orderBy('Year', 'desc')->get();
        return view('Admin.Investor.AdminIFSM')->with('data',$shareholdersinfo);
    }

    //後台股東會相關資訊 新增
    public function AdminShareholdersCreate(Request $request){
        $input = Input::all();
        $message=[
            'file.mimes'=> '請上傳PDF'
        ];

        $this->validate($request, [
            'file'=> 'required|mimes:pdf',
        ],$message);
        
        $file = $request->file('file');
            
        //Move Uploaded File
        $newFileName = date("YmdHis").'file.'.$file->getClientOriginalExtension();

        $shareholdersinfo = new ShareholdersInfo;
        $shareholdersinfo->Year = $input['year'];
        $shareholdersinfo->Type = $input['type'];
        $shareholdersinfo->FileName = $file->getClientOriginalName();
        $shareholdersinfo->FilePath = $newFileName;
        $shareholdersinfo->save();
        
        //Uploaded File Path 待修改
        $destinationPath = 'assets\images\CorporateGovernance';
        $file->move($destinationPath,$newFileName);

        return redirect()->back()->with(['status' => 'success','message' => '新增成功']);
    }

    //後台股東會相關資訊 編輯
    public function AdminShareholdersEdit(Request $request){
        $input=Input::all();
        $file = $request->file('file');
        $shareholders = Shareholdersinfo::find($input['id']);

        if($file==NULL){//No File
            $shareholders->Year = $input['year'];
            $shareholders->Type = $input['type'];
            $shareholders->save();
        }else{//New File
            $shareholders->Year = $input['year'];
            $shareholders->Type = $input['type'];
            $shareholders->FileName = $file->getClientOriginalName();
            $shareholders->FilePath = $newFileName;
            $shareholders->save();

            //Uploaded File Path 待修改
            $destinationPath = 'assets\images\CorporateGovernance';
            $newFileName = date("YmdHis").'shareholders.'.$file->getClientOriginalExtension();
            //Move Uploaded File
            $file->move($destinationPath,$newFileName);            
        }
        return redirect()->back()->with(['status' => 'success','message' => '編輯成功']);
    }

    //後台股東會相關資訊 刪除
    public function AdminShareholdersDelete(){
        $input=Input::all();
        $re=Shareholdersinfo::where('id',$input['id'])->delete();

        if($re){
            return redirect()->back()->with(['status' => 'success','message' => '刪除成功']);
        }else{
            return redirect()->back()->with(['status' => 'failed','message' => '刪除失敗']);
        }
        
    }

    //後台營收公告 首頁
    public function AdminRevenueIndex(){        
        $revenueinfo = RevenueInfo::orderBy('Month', 'asc')->get();
        return view('Admin.Investor.AdminMonthlyRevenue')->with('data',$revenueinfo);
    }

    //後台營收公告 新增
    public function AdminRevenueCreate(Request $request){
        $input = Input::all();
        
        $rules =[
            'amount'=> 'required|regex:/^\d*(\.\d{1,2})?$/',
            'consolidated'=> 'required|regex:/^\d*(\.\d{1,2})?$/',
        ];

        $message=[
            'amount.required'=> '營收金額不能為空白',
            'consolidated.required'=> '年度增減比例不能為空白',
            'amount.regex'=> '營收金額請輸入數字',
            'consolidated.regex'=> '年度增減比例請輸入數字',
        ];

        $Validator=Validator::make($input,$rules,$message);
        
        if($Validator->passes()){
            $revenueinfo = RevenueInfo::all()->where('Year', '=', $input['year'])->where('Month', '=', $input['month']);
            if($revenueinfo->isEmpty()){
                $revenue = new RevenueInfo;
                $revenue->Year = $input['year'];
                $revenue->Month = $input['month'];
                $revenue->Amount = $input['amount'];
                $revenue->Consolidated = $input['consolidated'];
                $revenue->save();
    
                return redirect()->back()->with(['status' => 'success','message' => '新增成功']);
            }else{
                return redirect()->back()->with(['status' => 'failed','message' => '新增失敗']);
            }
        }else{
            return back()->withErrors($Validator);
        }
    }
    
    //後台營收公告 編輯
    public function AdminRevenueEdit(Request $request){
        $input = Input::all();
        $revenueinfo = RevenueInfo::find($input['id']);

        $rules =[
            'amount'=> 'required|regex:/^\d*(\.\d{1,2})?$/',
            'consolidated'=> 'required|regex:/^\d*(\.\d{1,2})?$/',
        ];

        $message=[
            'amount.required'=> '營收金額不能為空白',
            'consolidated.required'=> '年度增減比例不能為空白',
            'amount.regex'=> '營收金額請輸入數字',
            'consolidated.regex'=> '年度增減比例請輸入數字',
        ];

        $Validator=Validator::make($input,$rules,$message);
        
        if($Validator->passes()){
            $revenueinfo->Amount = $input['amount'];
            $revenueinfo->Consolidated = $input['consolidated'];
            $revenueinfo->save();
            return redirect()->back()->with(['status' => 'success','message' => '編輯成功']);
        }else{
            return back()->withErrors($Validator);
        }
    }

    //後台營收公告 刪除
    public function AdminRevenueDelete(){
        $input=Input::all();
        $re=RevenueInfo::where('id',$input['id'])->delete();

        if($re){
            return redirect()->back()->with(['status' => 'success','message' => '刪除成功']);
        }else{
            return redirect()->back()->with(['status' => 'failed','message' => '刪除失敗']);
        }
        
    }

    //後台財務資訊 首頁
    public function AdminFinanceIndex(){        
        $financeinfo = FinanceInfo::orderBy('Year', 'desc')->get();
        return view('Admin.Investor.AdminFinancialInformation')->with('data',$financeinfo);
    }

    //後台財務資訊 新增
    public function AdminFinanceCreate(Request $request){
        $input = Input::all();
        $message=[
            'file.mimes'=> '請上傳PDF'
        ];

        $this->validate($request, [
            'file'=> 'required|mimes:pdf',
        ],$message);
        
        $file = $request->file('file');
        
        
        //Move Uploaded File
        $newFileName = date("YmdHis").'file.'.$file->getClientOriginalExtension();      

        $financeinfo = new FinanceInfo;
        $financeinfo->Year = $input['year'];
        $financeinfo->Type = $input['type'];
        $financeinfo->FileName = $file->getClientOriginalName();
        $financeinfo->FilePath = $newFileName;
        $financeinfo->save();
        
        //Uploaded File Path 待修改
        $destinationPath = 'assets\images\CorporateGovernance';
        //$file->move($destinationPath,$newFileName);

        return redirect()->back()->with(['status' => 'success','message' => '新增成功']);
    }

    //後台財務資訊 編輯
    public function AdminFinanceEdit(Request $request){
        
        $input = Input::all();
        $financeinfo = FinanceInfo::find($input['id']);
        
        $file = $request->file('file');
        
        if($file==NULL){//No File
            $financeinfo->Year = $input['year'];
            $financeinfo->Type = $input['type'];
            $financeinfo->save();
        }else{//New File
            //Move Uploaded File
            $newFileName = date("YmdHis").'financeinfo.'.$file->getClientOriginalExtension();

            $financeinfo->Year = $input['year'];
            $financeinfo->Type = $input['type'];
            $financeinfo->FileName = $file->getClientOriginalName();
            $financeinfo->FilePath = $newFileName;
            $financeinfo->save();

            //Uploaded File Path 待修改
            $destinationPath = 'assets\images\CorporateGovernance';
            $file->move($destinationPath,$newFileName);            
        }

        return redirect()->back()->with(['status' => 'success','message' => '編輯成功']);
    }
    
    //後台財務資訊 刪除
    public function AdminFinanceDelete(){
        $input=Input::all();
        $re=FinanceInfo::where('id',$input['id'])->delete();
        
        if($re){
            return redirect()->back()->with(['status' => 'success','message' => '刪除成功']);
        }else{
            return redirect()->back()->with(['status' => 'failed','message' => '刪除失敗']);
        }
                
    }
        
}
