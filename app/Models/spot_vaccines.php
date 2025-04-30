<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class spot_vaccines extends Model
{
    protected $table = 'spot_vaccines';

    protected $fillable = [
        'spot_id',
        'vaccine_id',
    ];

    public function vaccine()
    {
        return $this->belongsTo(vaccines::class);
    }
}
