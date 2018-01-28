<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Http\Model\EnAirQuality;
use App\Http\Model\EnFlue;
use App\Http\Model\EnFlyash;
use App\Http\Model\EnIncineratorbottom;
use App\Http\Model\EnNoiseVibration;
use App\Http\Model\EnRawwater;
use App\Http\Model\EnSoil;
use App\Http\Model\EnGroundwater;
use App\Http\Model\AlUnit;
use Validator;


class EnvironmentalprotectionController extends Controller
{
    public function alUnit()
    {
        $alunit = AlUnit::orderBy('Date', 'desc')->get();
        return view('Environmentalprotection.EnvironmentalUnit')->with('data',$alunit);
    }
    public function Monitoring()
    {        
        $enairquality = EnAirQuality::all();
        $enflue = EnFlue::all();
        $enflyash = EnFlyash::all();
        $enincineratorbottom = EnIncineratorbottom::all();
        $ennoisevibration = EnNoiseVibration::all();
        $enrawwater = EnRawwater::all();
        $ensoil = EnSoil::all();
        $engroundwater = EnGroundwater::all();
        return view('Environmentalprotection.EnvironmentMonitoring')->with('data', ['enairquality' => $enairquality, 'enflue' => $enflue, 'enflyash' => $enflyash, 
                                                                           'enincineratorbottom' => $enincineratorbottom, 'ennoisevibration' => $ennoisevibration, 
                                                                           'enrawwater' => $enrawwater, 'ensoil' => $ensoil, 'engroundwater' => $engroundwater]);
    }

    //後台環境保護查核行程 首頁
    public function AdminAlUnitIndex()
    {
        $alunit = AlUnit::orderBy('Date', 'desc')->get();
        return view('Admin.Environmentalprotection.AdminEnvUnit')->with('data',$alunit);
    }

    //後台環境保護查核行程 新增
    public function AdminAlUnitCreate()
    {
        $input = Input::all();

        $rules =[
            'date'=> '',
        ];

        $message=[
            'date.required'=> '',
        ];

        $Validator=Validator::make($input,$rules,$message);
        
        if($Validator->passes()){
            $alunit = new AlUnit;
            $alunit->Date = $input['Date'];
            $alunit->Notes = $input['Notes'];
            $alunit->Organizer = $input['Organizer'];
            $alunit->Result = $input['Result'];
            $alunit->save();
        
            return redirect()->back()->with(['status' => 'success','message' => '新增成功']);
        }else{
            return back()->withErrors($Validator);
        }
    }

    //後台環境保護查核行程 編輯
    public function AdminAlUnitEdit(){
        $rules =[
        ];

        $message=[
        ];

        $input=Input::all();
        $Validator=Validator::make($input,$rules,$message);
        $alunit = AlUnit::find($input['id']);
        
        if($Validator->passes()){
            $alunit->Date = $input['Date'];
            $alunit->Notes = $input['Notes'];
            $alunit->Organizer = $input['Organizer'];
            $alunit->Result = $input['Result'];
            $alunit->save();
 
            return redirect()->back()->with(['status' => 'success','message' => '編輯成功']);
        }else{
            return back()->withErrors($Validator);
        }
    }

    //後台環境保護查核行程 刪除
    public function AdminAlUnitDelete(){
        $input=Input::all();
        $re=AlUnit::where('id',$input['id'])->delete();

        if($re){
            return redirect()->back()->with(['status' => 'success','message' => '刪除成功']);
        }else{
            return redirect()->back()->with(['status' => 'failed','message' => '刪除失敗']);
        }
        
    }

    //後台環境監測 首頁
    public function AdminMonitoringIndex(){        
        $enairquality = EnAirQuality::all();
        $enflue = EnFlue::all();
        $enflyash = EnFlyash::all();
        $enincineratorbottom = EnIncineratorbottom::all();
        $ennoisevibration = EnNoiseVibration::all();
        $enrawwater = EnRawwater::all();
        $ensoil = EnSoil::all();
        $engroundwater = EnGroundwater::all();
        return view('Admin.Environmentalprotection.AdminEnvMonitoring')->with('data', ['enairquality' => $enairquality, 'enflue' => $enflue, 'enflyash' => $enflyash, 
                                                                  'enincineratorbottom' => $enincineratorbottom, 'ennoisevibration' => $ennoisevibration, 
                                                                  'enrawwater' => $enrawwater, 'ensoil' => $ensoil, 'engroundwater' => $engroundwater]);
    }

    //後台環境監測 新增
    public function AdminMonitoringCreate(Request $request){
        $input = Input::all();
        switch($input['title'])
        {
            case "enflue":
                $enflue = array(
                    array('Year'=>$input['Year'], 'Season'=> '1','Location'=>'一廠','Granular'=>'','Sulfurdioxide'=>'','Nitroxides'=>'','Carbonmonoxide'=>'','Hydrogenchloride'=>'','Pb'=>'','Cd'=>'','Hg'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '1','Location'=>'二廠','Granular'=>'','Sulfurdioxide'=>'','Nitroxides'=>'','Carbonmonoxide'=>'','Hydrogenchloride'=>'','Pb'=>'','Cd'=>'','Hg'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '1','Location'=>'三廠','Granular'=>'','Sulfurdioxide'=>'','Nitroxides'=>'','Carbonmonoxide'=>'','Hydrogenchloride'=>'','Pb'=>'','Cd'=>'','Hg'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '2','Location'=>'一廠','Granular'=>'','Sulfurdioxide'=>'','Nitroxides'=>'','Carbonmonoxide'=>'','Hydrogenchloride'=>'','Pb'=>'','Cd'=>'','Hg'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '2','Location'=>'二廠','Granular'=>'','Sulfurdioxide'=>'','Nitroxides'=>'','Carbonmonoxide'=>'','Hydrogenchloride'=>'','Pb'=>'','Cd'=>'','Hg'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '2','Location'=>'三廠','Granular'=>'','Sulfurdioxide'=>'','Nitroxides'=>'','Carbonmonoxide'=>'','Hydrogenchloride'=>'','Pb'=>'','Cd'=>'','Hg'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '3','Location'=>'一廠','Granular'=>'','Sulfurdioxide'=>'','Nitroxides'=>'','Carbonmonoxide'=>'','Hydrogenchloride'=>'','Pb'=>'','Cd'=>'','Hg'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '3','Location'=>'二廠','Granular'=>'','Sulfurdioxide'=>'','Nitroxides'=>'','Carbonmonoxide'=>'','Hydrogenchloride'=>'','Pb'=>'','Cd'=>'','Hg'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '3','Location'=>'三廠','Granular'=>'','Sulfurdioxide'=>'','Nitroxides'=>'','Carbonmonoxide'=>'','Hydrogenchloride'=>'','Pb'=>'','Cd'=>'','Hg'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '4','Location'=>'一廠','Granular'=>'','Sulfurdioxide'=>'','Nitroxides'=>'','Carbonmonoxide'=>'','Hydrogenchloride'=>'','Pb'=>'','Cd'=>'','Hg'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '4','Location'=>'二廠','Granular'=>'','Sulfurdioxide'=>'','Nitroxides'=>'','Carbonmonoxide'=>'','Hydrogenchloride'=>'','Pb'=>'','Cd'=>'','Hg'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '4','Location'=>'三廠','Granular'=>'','Sulfurdioxide'=>'','Nitroxides'=>'','Carbonmonoxide'=>'','Hydrogenchloride'=>'','Pb'=>'','Cd'=>'','Hg'=>''),        
                );
                $enflueinfo = EnFlue::all()->where('Year', '=', $input['Year']);
                if($enflueinfo->isEmpty()){
                    EnFlue::insert($enflue); 
                    return redirect()->back()->with(['status' => 'success','message' => '煙道新增成功']);
                }else{
                    return redirect()->back()->with(['status' => 'failed','message' => '煙道新增失敗']);
                }
               
            case "enrawwater":
                $enrawwater = array(
                    array('Year'=>$input['Year'], 'Season'=> '1','Location'=>'廠址','Watertemperature'=>'','PHvalue'=>'','Suspendedsolids'=>'','COD'=>'','Coliform'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '2','Location'=>'廠址','Watertemperature'=>'','PHvalue'=>'','Suspendedsolids'=>'','COD'=>'','Coliform'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '3','Location'=>'廠址','Watertemperature'=>'','PHvalue'=>'','Suspendedsolids'=>'','COD'=>'','Coliform'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '4','Location'=>'廠址','Watertemperature'=>'','PHvalue'=>'','Suspendedsolids'=>'','COD'=>'','Coliform'=>''),    
                );

                $enrawwaterinfo = EnRawwater::all()->where('Year', '=', $input['Year']);
                if($enrawwaterinfo->isEmpty()){
                    EnRawwater::insert($enrawwater); 
                    return redirect()->back()->with(['status' => 'success','message' => '原水新增成功']);
                }else{
                    return redirect()->back()->with(['status' => 'failed','message' => '原水新增失敗']);
                }
            break;
            case "enairquality":
                $enairquality = array(
                    array('Year'=>$input['Year'], 'Season'=> '1','Location'=>'廠址','Windspeed'=>'','Winddirection'=>'','Humidity'=>'','Temperature'=>'','TSP'=>'','SO2'=>'','NOx'=>'','CO'=>'','THC'=>'','CH4'=>'','NMHC'=>'','PM10'=>'','PM25'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '2','Location'=>'廠址','Windspeed'=>'','Winddirection'=>'','Humidity'=>'','Temperature'=>'','TSP'=>'','SO2'=>'','NOx'=>'','CO'=>'','THC'=>'','CH4'=>'','NMHC'=>'','PM10'=>'','PM25'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '3','Location'=>'廠址','Windspeed'=>'','Winddirection'=>'','Humidity'=>'','Temperature'=>'','TSP'=>'','SO2'=>'','NOx'=>'','CO'=>'','THC'=>'','CH4'=>'','NMHC'=>'','PM10'=>'','PM25'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '4','Location'=>'廠址','Windspeed'=>'','Winddirection'=>'','Humidity'=>'','Temperature'=>'','TSP'=>'','SO2'=>'','NOx'=>'','CO'=>'','THC'=>'','CH4'=>'','NMHC'=>'','PM10'=>'','PM25'=>''),   
                );
                $enairqualityinfo = EnAirQuality::all()->where('Year', '=', $input['Year']);
                if($enairqualityinfo->isEmpty()){
                    EnAirQuality::insert($enairquality); 
                    return redirect()->back()->with(['status' => 'success','message' => '空氣監測新增成功']);
                }else{
                    return redirect()->back()->with(['status' => 'failed','message' => '空氣監測新增失敗']);
                }
            break;
            case "ennoisevibration":
                $ennoisevibration = array(
                    array('Year'=>$input['Year'], 'Season'=> '1','Location'=>'廠址','Lmorning'=>'','Levening'=>'','Lnight'=>'','Lvmorning'=>'','Lvnight'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '2','Location'=>'廠址','Lmorning'=>'','Levening'=>'','Lnight'=>'','Lvmorning'=>'','Lvnight'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '3','Location'=>'廠址','Lmorning'=>'','Levening'=>'','Lnight'=>'','Lvmorning'=>'','Lvnight'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '4','Location'=>'廠址','Lmorning'=>'','Levening'=>'','Lnight'=>'','Lvmorning'=>'','Lvnight'=>''),    
                );
                $ennoisevibrationinfo = EnNoiseVibration::all()->where('Year', '=', $input['Year']);
                if($ennoisevibrationinfo->isEmpty()){
                    EnNoiseVibration::insert($ennoisevibration); 
                    return redirect()->back()->with(['status' => 'success','message' => '噪音振動新增成功']);
                }else{
                    return redirect()->back()->with(['status' => 'failed','message' => '噪音振動新增失敗']);
                }
            break;
            case "ensoil":
                $ensoil = array(
                    array('Year'=>$input['Year'],'Location'=>'廠址','Pb'=>'','Cd'=>'','Hg'=>''),
                    array('Year'=>$input['Year'],'Location'=>'廠址','Pb'=>'','Cd'=>'','Hg'=>''),   
                );
                $ensoilinfo = EnSoil::all()->where('Year', '=', $input['Year']);
                if($ensoilinfo->isEmpty()){
                    EnSoil::insert($ensoil); 
                    return redirect()->back()->with(['status' => 'success','message' => '土壤新增成功']);
                }else{
                    return redirect()->back()->with(['status' => 'failed','message' => '土壤新增失敗']);
                }
            break;
            case "enflyash":
                $enflyash = array(
                    array('Year'=>$input['Year'], 'Season'=> '1','Location'=>'一廠','Type'=>'','Cr6'=>'','TotalCd'=>'','TotalCr'=>'','TotalCu'=>'','TotalPb'=>'','TotalBa'=>'','TotalAs'=>'','TotalHg'=>'','TotalSe'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '1','Location'=>'二廠','Type'=>'','Cr6'=>'','TotalCd'=>'','TotalCr'=>'','TotalCu'=>'','TotalPb'=>'','TotalBa'=>'','TotalAs'=>'','TotalHg'=>'','TotalSe'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '1','Location'=>'三廠','Type'=>'','Cr6'=>'','TotalCd'=>'','TotalCr'=>'','TotalCu'=>'','TotalPb'=>'','TotalBa'=>'','TotalAs'=>'','TotalHg'=>'','TotalSe'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '2','Location'=>'一廠','Type'=>'','Cr6'=>'','TotalCd'=>'','TotalCr'=>'','TotalCu'=>'','TotalPb'=>'','TotalBa'=>'','TotalAs'=>'','TotalHg'=>'','TotalSe'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '2','Location'=>'二廠','Type'=>'','Cr6'=>'','TotalCd'=>'','TotalCr'=>'','TotalCu'=>'','TotalPb'=>'','TotalBa'=>'','TotalAs'=>'','TotalHg'=>'','TotalSe'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '2','Location'=>'三廠','Type'=>'','Cr6'=>'','TotalCd'=>'','TotalCr'=>'','TotalCu'=>'','TotalPb'=>'','TotalBa'=>'','TotalAs'=>'','TotalHg'=>'','TotalSe'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '3','Location'=>'一廠','Type'=>'','Cr6'=>'','TotalCd'=>'','TotalCr'=>'','TotalCu'=>'','TotalPb'=>'','TotalBa'=>'','TotalAs'=>'','TotalHg'=>'','TotalSe'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '3','Location'=>'二廠','Type'=>'','Cr6'=>'','TotalCd'=>'','TotalCr'=>'','TotalCu'=>'','TotalPb'=>'','TotalBa'=>'','TotalAs'=>'','TotalHg'=>'','TotalSe'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '3','Location'=>'三廠','Type'=>'','Cr6'=>'','TotalCd'=>'','TotalCr'=>'','TotalCu'=>'','TotalPb'=>'','TotalBa'=>'','TotalAs'=>'','TotalHg'=>'','TotalSe'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '4','Location'=>'一廠','Type'=>'','Cr6'=>'','TotalCd'=>'','TotalCr'=>'','TotalCu'=>'','TotalPb'=>'','TotalBa'=>'','TotalAs'=>'','TotalHg'=>'','TotalSe'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '4','Location'=>'二廠','Type'=>'','Cr6'=>'','TotalCd'=>'','TotalCr'=>'','TotalCu'=>'','TotalPb'=>'','TotalBa'=>'','TotalAs'=>'','TotalHg'=>'','TotalSe'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '4','Location'=>'三廠','Type'=>'','Cr6'=>'','TotalCd'=>'','TotalCr'=>'','TotalCu'=>'','TotalPb'=>'','TotalBa'=>'','TotalAs'=>'','TotalHg'=>'','TotalSe'=>''),        
                );
                $enflyashinfo = EnFlyash::all()->where('Year', '=', $input['Year']);
                if($enflyashinfo->isEmpty()){
                    EnFlyash::insert($enflyash);
                    return redirect()->back()->with(['status' => 'success','message' => 'TCLP飛灰新增成功']);
                }else{
                    return redirect()->back()->with(['status' => 'failed','message' => 'TCLP飛灰新增失敗']);
                }
            break;
            case "enincineratorbottom":
                $enincineratorbottom = array(
                    array('Year'=>$input['Year'], 'Season'=> '上半年','Location'=>'一廠','Type'=>'','Cr6'=>'','TotalCd'=>'','TotalCr'=>'','TotalCu'=>'','TotalPb'=>'','TotalBa'=>'','TotalAs'=>'','TotalHg'=>'','TotalSe'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '上半年','Location'=>'二廠','Type'=>'','Cr6'=>'','TotalCd'=>'','TotalCr'=>'','TotalCu'=>'','TotalPb'=>'','TotalBa'=>'','TotalAs'=>'','TotalHg'=>'','TotalSe'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '上半年','Location'=>'三廠','Type'=>'','Cr6'=>'','TotalCd'=>'','TotalCr'=>'','TotalCu'=>'','TotalPb'=>'','TotalBa'=>'','TotalAs'=>'','TotalHg'=>'','TotalSe'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '下半年','Location'=>'一廠','Type'=>'','Cr6'=>'','TotalCd'=>'','TotalCr'=>'','TotalCu'=>'','TotalPb'=>'','TotalBa'=>'','TotalAs'=>'','TotalHg'=>'','TotalSe'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '下半年','Location'=>'二廠','Type'=>'','Cr6'=>'','TotalCd'=>'','TotalCr'=>'','TotalCu'=>'','TotalPb'=>'','TotalBa'=>'','TotalAs'=>'','TotalHg'=>'','TotalSe'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '下半年','Location'=>'三廠','Type'=>'','Cr6'=>'','TotalCd'=>'','TotalCr'=>'','TotalCu'=>'','TotalPb'=>'','TotalBa'=>'','TotalAs'=>'','TotalHg'=>'','TotalSe'=>''),
                );
                $enincineratorbottominfo = EnIncineratorbottom::all()->where('Year', '=', $input['Year']);
                if($enincineratorbottominfo->isEmpty()){
                    EnIncineratorbottom::insert($enincineratorbottom);
                    return redirect()->back()->with(['status' => 'success','message' => 'TCLP底渣新增成功']);
                }else{
                    return redirect()->back()->with(['status' => 'failed','message' => 'TCLP底渣新增失敗']);
                }
            break;
            case "engroundwater":
                $engroundwater = array(
                    array('Year'=>$input['Year'], 'Season'=> '1','Location'=>'一號井','Toc'=>'','TDS'=>'','Sulfate'=>'','NaCl'=>'','Totalhardness'=>'','Nitratenitrogen'=>'','Ammonianitrogen'=>'','Pb'=>'','Cr'=>'','Mn'=>'','Iron'=>'','Hg'=>'','As'=>'','Ni'=>'','Zn'=>'','Cu'=>'','PHvalue'=>'','Temperature'=>'','Turbidity'=>'','Conductivity'=>'','Specificconductivity'=>'','Grease'=>'','Cd'=>'','TotalN'=>'','TotalP'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '1','Location'=>'二號井','Toc'=>'','TDS'=>'','Sulfate'=>'','NaCl'=>'','Totalhardness'=>'','Nitratenitrogen'=>'','Ammonianitrogen'=>'','Pb'=>'','Cr'=>'','Mn'=>'','Iron'=>'','Hg'=>'','As'=>'','Ni'=>'','Zn'=>'','Cu'=>'','PHvalue'=>'','Temperature'=>'','Turbidity'=>'','Conductivity'=>'','Specificconductivity'=>'','Grease'=>'','Cd'=>'','TotalN'=>'','TotalP'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '2','Location'=>'一號井','Toc'=>'','TDS'=>'','Sulfate'=>'','NaCl'=>'','Totalhardness'=>'','Nitratenitrogen'=>'','Ammonianitrogen'=>'','Pb'=>'','Cr'=>'','Mn'=>'','Iron'=>'','Hg'=>'','As'=>'','Ni'=>'','Zn'=>'','Cu'=>'','PHvalue'=>'','Temperature'=>'','Turbidity'=>'','Conductivity'=>'','Specificconductivity'=>'','Grease'=>'','Cd'=>'','TotalN'=>'','TotalP'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '2','Location'=>'二號井','Toc'=>'','TDS'=>'','Sulfate'=>'','NaCl'=>'','Totalhardness'=>'','Nitratenitrogen'=>'','Ammonianitrogen'=>'','Pb'=>'','Cr'=>'','Mn'=>'','Iron'=>'','Hg'=>'','As'=>'','Ni'=>'','Zn'=>'','Cu'=>'','PHvalue'=>'','Temperature'=>'','Turbidity'=>'','Conductivity'=>'','Specificconductivity'=>'','Grease'=>'','Cd'=>'','TotalN'=>'','TotalP'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '3','Location'=>'一號井','Toc'=>'','TDS'=>'','Sulfate'=>'','NaCl'=>'','Totalhardness'=>'','Nitratenitrogen'=>'','Ammonianitrogen'=>'','Pb'=>'','Cr'=>'','Mn'=>'','Iron'=>'','Hg'=>'','As'=>'','Ni'=>'','Zn'=>'','Cu'=>'','PHvalue'=>'','Temperature'=>'','Turbidity'=>'','Conductivity'=>'','Specificconductivity'=>'','Grease'=>'','Cd'=>'','TotalN'=>'','TotalP'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '3','Location'=>'二號井','Toc'=>'','TDS'=>'','Sulfate'=>'','NaCl'=>'','Totalhardness'=>'','Nitratenitrogen'=>'','Ammonianitrogen'=>'','Pb'=>'','Cr'=>'','Mn'=>'','Iron'=>'','Hg'=>'','As'=>'','Ni'=>'','Zn'=>'','Cu'=>'','PHvalue'=>'','Temperature'=>'','Turbidity'=>'','Conductivity'=>'','Specificconductivity'=>'','Grease'=>'','Cd'=>'','TotalN'=>'','TotalP'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '4','Location'=>'一號井','Toc'=>'','TDS'=>'','Sulfate'=>'','NaCl'=>'','Totalhardness'=>'','Nitratenitrogen'=>'','Ammonianitrogen'=>'','Pb'=>'','Cr'=>'','Mn'=>'','Iron'=>'','Hg'=>'','As'=>'','Ni'=>'','Zn'=>'','Cu'=>'','PHvalue'=>'','Temperature'=>'','Turbidity'=>'','Conductivity'=>'','Specificconductivity'=>'','Grease'=>'','Cd'=>'','TotalN'=>'','TotalP'=>''),
                    array('Year'=>$input['Year'], 'Season'=> '4','Location'=>'二號井','Toc'=>'','TDS'=>'','Sulfate'=>'','NaCl'=>'','Totalhardness'=>'','Nitratenitrogen'=>'','Ammonianitrogen'=>'','Pb'=>'','Cr'=>'','Mn'=>'','Iron'=>'','Hg'=>'','As'=>'','Ni'=>'','Zn'=>'','Cu'=>'','PHvalue'=>'','Temperature'=>'','Turbidity'=>'','Conductivity'=>'','Specificconductivity'=>'','Grease'=>'','Cd'=>'','TotalN'=>'','TotalP'=>''), 
                );
                $engroundwaterinfo = EnGroundwater::all()->where('Year', '=', $input['Year']);
                if($engroundwaterinfo->isEmpty()){
                    EnGroundwater::insert($engroundwater);
                    return redirect()->back()->with(['status' => 'success','message' => '地下水新增成功']);
                }else{
                    return redirect()->back()->with(['status' => 'failed','message' => '地下水新增失敗']);
                }
            break;
        }
    }

    //後台環境監測 編輯
    public function AdminMonitoringEdit(Request $request){
        $input = Input::all();
        
        switch($input['title'])
        {
            case "enflue"://煙道
                $enflue = EnFlue::find($input['id']);
                $enflue->Granular = $input['Granular'];
                $enflue->Sulfurdioxide = $input['Sulfurdioxide'];
                $enflue->Nitroxides = $input['Nitroxides'];
                $enflue->Carbonmonoxide = $input['Carbonmonoxide'];
                $enflue->Hydrogenchloride = $input['Hydrogenchloride'];
                $enflue->Pb = $input['Pb'];
                $enflue->Cd = $input['Cd'];
                $enflue->Hg = $input['Hg'];
                $enflue->save();
                return redirect()->back()->with(['status' => 'success','message' => '煙道編輯成功']);
            case "enrawwater"://原水
                $enrawwater = EnRawwater::find($input['id']);
                $enrawwater->Watertemperature = $input['Watertemperature'];
                $enrawwater->PHvalue = $input['PHvalue'];
                $enrawwater->Suspendedsolids = $input['Suspendedsolids'];
                $enrawwater->COD = $input['COD'];
                $enrawwater->Coliform = $input['Coliform'];
                $enrawwater->save();
                return redirect()->back()->with(['status' => 'success','message' => '原水編輯成功']);
            break;
            case "enairquality"://空氣監測
                $enairquality = EnAirQuality::find($input['id']);
                $enairquality->Windspeed = $input['Windspeed'];
                $enairquality->Winddirection = $input['Winddirection'];
                $enairquality->Humidity = $input['Humidity'];
                $enairquality->Temperature = $input['Temperature'];
                $enairquality->TSP = $input['TSP'];
                $enairquality->SO2 = $input['SO2'];
                $enairquality->NOx = $input['NOx'];
                $enairquality->CO = $input['CO'];
                $enairquality->THC = $input['THC'];
                $enairquality->CH4 = $input['CH4'];
                $enairquality->NMHC = $input['NMHC'];
                $enairquality->PM10 = $input['PM10'];
                $enairquality->PM25 = $input['PM25'];
                $enairquality->save();
                return redirect()->back()->with(['status' => 'success','message' => '空氣監測編輯成功']);
            break;
            case "ennoisevibration"://噪音振動
                $ennoisevibration = EnNoiseVibration::find($input['id']);
                $ennoisevibration->Lmorning = $input['Lmorning'];
                $ennoisevibration->Levening = $input['Levening'];
                $ennoisevibration->Lnight = $input['Lnight'];
                $ennoisevibration->Lvmorning = $input['Lvmorning'];
                $ennoisevibration->Lvnight = $input['Lvnight'];
                $ennoisevibration->save();
                return redirect()->back()->with(['status' => 'success','message' => '噪音振動編輯成功']);
            break;
            case "ensoil"://土壤
                $ensoil = EnSoil::find($input['id']);
                $ensoil->Pb = $input['Pb'];
                $ensoil->Cd = $input['Cd'];
                $ensoil->Hg = $input['Hg'];
                $ensoil->save();
                return redirect()->back()->with(['status' => 'success','message' => '土壤編輯成功']);
            break;
            case "enflyash"://TCLP飛灰
                $enflyash = EnFlyash::find($input['id']);
                $enflyash->Type = $input['Type'];
                $enflyash->Cr6 = $input['Cr6'];
                $enflyash->TotalCd = $input['TotalCd'];
                $enflyash->TotalCr = $input['TotalCr'];
                $enflyash->TotalCu = $input['TotalCu'];
                $enflyash->TotalPb = $input['TotalPb'];
                $enflyash->TotalBa = $input['TotalBa'];
                $enflyash->TotalAs = $input['TotalAs'];
                $enflyash->TotalHg = $input['TotalHg'];
                $enflyash->TotalSe = $input['TotalSe'];
                $enflyash->save();
                return redirect()->back()->with(['status' => 'success','message' => 'TCLP飛灰編輯成功']);
            break;
            case "enincineratorbottom":
                $enincineratorbottom = EnIncineratorbottom::find($input['id']);
                $enincineratorbottom->Type = $input['Type'];
                $enincineratorbottom->Cr6 = $input['Cr6'];
                $enincineratorbottom->TotalCd = $input['TotalCd'];
                $enincineratorbottom->TotalCr = $input['TotalCr'];
                $enincineratorbottom->TotalCu = $input['TotalCu'];
                $enincineratorbottom->TotalPb = $input['TotalPb'];
                $enincineratorbottom->TotalBa = $input['TotalBa'];
                $enincineratorbottom->TotalAs = $input['TotalAs'];
                $enincineratorbottom->TotalHg = $input['TotalHg'];
                $enincineratorbottom->TotalSe = $input['TotalSe'];
                $enincineratorbottom->save();
                return redirect()->back()->with(['status' => 'success','message' => 'TCLP底渣編輯成功']);
            break;
            case "engroundwater"://地下水
                $engroundwater = EnGroundwater::find($input['id']);
                $engroundwater->Toc = $input['Toc'];
                $engroundwater->TDS = $input['TDS'];
                $engroundwater->Sulfate = $input['Sulfate'];
                $engroundwater->NaCl = $input['NaCl'];
                $engroundwater->Totalhardness = $input['Totalhardness'];
                $engroundwater->Nitratenitrogen = $input['Nitratenitrogen'];
                $engroundwater->Ammonianitrogen = $input['Ammonianitrogen'];
                $engroundwater->Pb = $input['Pb'];
                $engroundwater->Cr = $input['Cr'];
                $engroundwater->Mn = $input['Mn'];
                $engroundwater->Iron = $input['Iron'];
                $engroundwater->Hg = $input['Hg'];
                $engroundwater->As = $input['As'];
                $engroundwater->Ni = $input['Ni'];
                $engroundwater->Zn = $input['Zn'];
                $engroundwater->Cu = $input['Cu'];
                $engroundwater->PHvalue = $input['PHvalue'];
                $engroundwater->Temperature = $input['Temperature'];
                $engroundwater->Turbidity = $input['Turbidity'];
                $engroundwater->Conductivity = $input['Conductivity'];
                $engroundwater->Specificconductivity = $input['Specificconductivity'];
                $engroundwater->Grease = $input['Grease'];
                $engroundwater->Cd = $input['Cd'];
                $engroundwater->TotalN = $input['TotalN'];
                $engroundwater->TotalP = $input['TotalP'];
                $engroundwater->save();
                return redirect()->back()->with(['status' => 'success','message' => '地下水編輯成功']);
            break;
        }
        return redirect()->back()->with(['status' => 'failed','message' => '編輯失敗']);
    }

    //後台環境監測 刪除
    public function AdminMonitoringDelete(){
        $input=Input::all();

        switch($input['title'])
        {
            case "enflue"://煙道
                $enflue = EnFlue::where('Year',$input['Year'])->delete();
                if($enflue){
                    return redirect()->back()->with(['status' => 'success','message' => '煙道刪除成功']);
                }else{
                    return redirect()->back()->with(['status' => 'failed','message' => '煙道刪除失敗']);
                }
            case "enrawwater"://原水
                $enrawwater = EnRawwater::where('Year',$input['Year'])->delete();

                return redirect()->back()->with(['status' => 'success','message' => '原水刪除成功']);
            break;
            case "enairquality"://空氣監測
                $enairquality = EnAirQuality::where('Year',$input['Year'])->delete();
 
                return redirect()->back()->with(['status' => 'success','message' => '空氣監測刪除成功']);
            break;
            case "ennoisevibration"://噪音振動
                $ennoisevibration = EnNoiseVibration::where('Year',$input['Year'])->delete();

                return redirect()->back()->with(['status' => 'success','message' => '噪音振動刪除成功']);
            break;
            case "ensoil"://土壤
                $ensoil = EnSoil::where('Year',$input['Year'])->delete();
     
                return redirect()->back()->with(['status' => 'success','message' => '土壤刪除成功']);
            break;
            case "enflyash"://TCLP飛灰
                $enflyash = EnFlyash::where('Year',$input['Year'])->delete();
  
                return redirect()->back()->with(['status' => 'success','message' => 'TCLP飛灰刪除成功']);
            break;
            case "enincineratorbottom":
                $enincineratorbottom = EnIncineratorbottom::where('Year',$input['Year'])->delete();

                return redirect()->back()->with(['status' => 'success','message' => 'TCLP底渣刪除成功']);
            break;
            case "engroundwater"://地下水
                $engroundwater = EnGroundwater::where('Year',$input['Year'])->delete();

                return redirect()->back()->with(['status' => 'success','message' => '地下水刪除成功']);
            break;
        }
        return redirect()->back()->with(['status' => 'failed','message' => '刪除失敗']);

        
        
    }
}
