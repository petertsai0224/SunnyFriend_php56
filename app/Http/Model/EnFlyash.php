<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class EnFlyash extends Model
{
    protected $table='enflyash';
    protected $primaryKey='id';

    protected $fillable = [
        'Year', 'Season','Location', 'Type', 'Cr6', 'TotalCd', 'TotalCr','TotalCu', 'TotalPb', 'TotalBa', 'TotalAs', 'TotalHg','TotalSe'
    ];
}
