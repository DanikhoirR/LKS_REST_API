<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class consultations extends Model
{
    protected $table = 'consultations';
    protected $fillable = [
        'society_id',
        'doctor_id',
        'status',
        'disease_history',
        'current_symptoms',
        'doctor_notes',
    ];


    public function societies()
    {
        return $this->belongsTo(societies::class);
    }
}
