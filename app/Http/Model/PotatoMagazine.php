<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class PotatoMagazine extends Model
{
    protected $table='potatomagazine';
    protected $primaryKey='id';

    protected $fillable = [
       'OriFileName', 'FileName', 'OriImageName', 'ImageName'
    ];
}
