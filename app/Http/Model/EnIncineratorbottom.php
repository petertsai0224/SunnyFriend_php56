<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class EnIncineratorbottom extends Model
{
    protected $table='enincineratorbottom';
    protected $primaryKey='id';

    protected $fillable = [
        'Year', 'Season','Location', 'Type', 'Cr6', 'TotalCd', 'TotalCr','TotalCu', 'TotalPb', 'TotalBa', 'TotalAs', 'TotalHg','TotalSe'
    ];
}
