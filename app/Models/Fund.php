<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fund extends Model
{

    protected $table = 'fund';
    protected $fillable = [
        'member_id',
        'date',
        'status',
        'date',
        'note',
    ];

    public function member()
    {
        return $this->hasOne(UnionMember::class, 'id', 'member_id');
    }

}
