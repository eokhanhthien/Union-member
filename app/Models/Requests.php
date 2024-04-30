<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{

    protected $table = 'requests';
    protected $fillable = [
        'member_id',
        'date',
        'status',
    ];

    public function member()
    {
        return $this->hasOne(UnionMember::class, 'id', 'member_id');
    }

}
