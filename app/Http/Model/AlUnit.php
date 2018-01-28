<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class AlUnit extends Model
{
    protected $table='alunit';
    protected $primaryKey='id';

    protected $fillable = [
       'Date', 'Notes', 'Organizer', 'Result'
    ];
}
