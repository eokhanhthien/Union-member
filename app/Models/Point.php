<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{

    protected $table = 'point';
    protected $fillable = [
        'member_id',
        'activity_id',
        'point'
    ];


}
