<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vaccination extends Model
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
        return $this->belongsTo(Societie::class);
    }

    public function spots()
    {
        return $this->belongsTo(Spot::class);
    }

    public function vaccines()
    {
        return $this->belongsTo(Vaccine::class);
    }

    public function doctors()
    {
        return $this->belongsTo(Medical::class);
    }

    public function officers()
    {
        return $this->belongsTo(Medical::class);
    }
}
