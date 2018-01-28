<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class EnGroundwater extends Model
{
    protected $table='engroundwater';
    protected $primaryKey='id';

    protected $fillable = [
        'Year','Season','Location','Toc','TDS','Sulfate','NaCl','Totalhardness','Nitratenitrogen','Ammonianitrogen','Pb','Cr','Mn','Iron','Hg','As','Ni','Zn','Cu',
        'PHvalue','Temperature','Turbidity','Conductivity','Specificconductivity','Grease','Cd','TotalN','TotalP'
    ];
}
