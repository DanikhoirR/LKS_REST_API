<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spot_vaccine extends Model
{
    protected $table = 'spot_vaccines';

    protected $fillable = [
        'spot_id',
        'vaccine_id',
    ];

    public function vaccines()
    {
        return $this->belongsTo(Vaccine::class);
    }
}
