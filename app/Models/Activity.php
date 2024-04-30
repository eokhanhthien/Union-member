<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{

    protected $table = 'activities';
    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'location',
        'point',
        'status',
    ];

    


}
