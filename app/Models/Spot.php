<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    protected $table = 'spots';

    protected $fillable = [
        'regional_id',
        'name',
        'addreas',
        'serve',
        'capacity',
    ];

    public function regionals()
    {
        return $this->belongsTo(Regional::class);
    }
}
