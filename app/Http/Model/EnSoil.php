<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class EnSoil extends Model
{
    protected $table='ensoil';
    protected $primaryKey='id';

    protected $fillable = [
       'Year', 'Location', 'Pb', 'Cd', 'Hg', 'Dioxin'
    ];
}
