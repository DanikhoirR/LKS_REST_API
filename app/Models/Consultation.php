<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
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
        return $this->belongsTo(Societie::class);
    }

    public function doctors()
    {
        return $this->belongsTo(Medical::class);
    }
}
