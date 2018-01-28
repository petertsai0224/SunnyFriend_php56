<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class EnNoiseVibration extends Model
{
    protected $table='ennoisevibration';
    protected $primaryKey='id';

    protected $fillable = [
        'Year', 'Season','Location', 'Lmorning', 'Levening', 'Lnight', 'Lvmorning','Lvnight'
    ];
}
