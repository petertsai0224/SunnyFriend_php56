<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class CSRMagazine extends Model
{
    protected $table='csrmagazine';
    protected $primaryKey='id';

    protected $fillable = [
       'OriFileName', 'FileName', 'OriImageName', 'ImageName'
    ];
}
