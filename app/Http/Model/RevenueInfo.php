<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class RevenueInfo extends Model
{
    protected $table='revenueinfo';
    protected $primaryKey='id';

    protected $fillable = [
       'Year', 'Month', 'Amount', 'Consolidated', 'YoYchange'
    ];
}
