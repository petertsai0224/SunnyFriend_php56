<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class LatestNews extends Model
{
    protected $table='latestnews';
    protected $primaryKey='id';

    protected $fillable = [
       'title', 'Date', 'Content', 'FileName', 'FilePath'
    ];
}
