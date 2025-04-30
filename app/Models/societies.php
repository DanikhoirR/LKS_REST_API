<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class societies extends Model
{
    protected $table = 'societies';
    protected $fillable = [
        'id_card_number',
        'password',
        'name',
        'bon_darte',
        'gender',
        'addreas',
        'regional_id',
        'login_tokens',
    ];

    public function regionals()
    {
        return $this->belongsTo(regionals::class);
    }
}
