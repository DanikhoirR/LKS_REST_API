<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vaccines extends Model
{
    protected $table = 'vaccines';
    protected $fillable = [
        'name',
    ];
}
