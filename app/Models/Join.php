<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Join extends Model
{

    protected $table = 'join';
    protected $fillable = [
        'member_id',
        'activity_id',
        'status',
    ];

    public function member()
    {
        return $this->hasOne(UnionMember::class, 'id', 'member_id');
    }

    public function activity()
    {
        return $this->hasOne(Activity::class, 'id', 'activity_id');
    }

}
