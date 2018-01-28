<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class EnAirQuality extends Model
{
    protected $table='enairquality';
    protected $primaryKey='id';

    protected $fillable = [
        'Year', 'Season','Location', 'Windspeed','Winddirection', 'Humidity','Temperature', 'TSP', 'SO2', 'NOx', 'CO', 'THC','CH4','NMHC','PM10','PM25','Dioxin'
    ];
}
