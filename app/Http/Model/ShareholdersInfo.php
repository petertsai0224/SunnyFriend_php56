<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class ShareholdersInfo extends Model
{
    protected $table='shareholdersinfo';
    protected $primaryKey='id';

    protected $fillable = [
        'Year', 'Type', 'FileName', 'FilePath'
    ];
}
