<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class EnRawwater extends Model
{
    protected $table='enrawwater';
    protected $primaryKey='id';

    protected $fillable = [
        'Year', 'Season','Location', 'Watertemperature', 'PHvalue', 'Suspendedsolids', 'COD','Coliform'
    ];
}
