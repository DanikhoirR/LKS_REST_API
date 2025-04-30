<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medical extends Model
{
    protected $table = 'medicals';

    protected $fillable = [
        'spot_id',
        'user_id',
        'role',
        'name',
    ];

    public function spots()
    {
        return $this->belongsTo(Spot::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
