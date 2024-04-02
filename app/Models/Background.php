<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Background extends Model
{

    protected $table = 'background';
    protected $fillable = [
        'mssv',
        'full_name',
        'gender',
        'nation',
        'religion',
        'address',
        'day_in',
        'entry_place',
        'issuance_date',
        'class_id',
        'position_id',
        'image',
        'union_member_id',
        'phone_number',
    ];


}
