<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class EnFlue extends Model
{
    protected $table='enflue';
    protected $primaryKey='id';

    protected $fillable = [
        'Year', 'Season','Location', 'Granular','Sulfurdioxide', 'Nitroxides','Carbonmonoxide', 'Hydrogenchloride', 'Pb', 'Cd', 'Hg', 'Dioxin'
    ];
}
