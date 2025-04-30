<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vaccinations extends Model
{
    protected $table = 'vaccinations';
    protected $fillable = [
        'dose',
        'date',
        'society_id',
        'spot_id',
        'vaccine_id',
        'doctor_id',
        'officer_id',
    ];

    public function societies()
    {
        return $this->belongsTo(societies::class);
    }

    // public function spots()
    // {
    //     return $this->belongsTo(spots::class);
    // }

    public function vaccines()
    {
        return $this->belongsTo(vaccines::class);
    }

    // public function medicals()
    // {
    //     return $this->belongsTo(medicals::class);
    // }

    // public function medicals()
    // {
    //     return $this->belongsTo(medicals::class);
    // }
}
