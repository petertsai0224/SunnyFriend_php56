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
use Validator;


class EnvController extends Controller
{
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
        return view('Admin.Environmentalprotection.AdminEnvMonitoring')->with('data', ['enairquality' => $enairquality, 'enflue' => $enflue, 'enflyash' => $enflyash, 
                                                                  'enincineratorbottom' => $enincineratorbottom, 'ennoisevibration' => $ennoisevibration, 
                                                                  'enrawwater' => $enrawwater, 'ensoil' => $ensoil, 'engroundwater' => $engroundwater]);
   
    }

}
