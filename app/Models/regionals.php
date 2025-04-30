<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class regionals extends Model
{
    protected $table = 'regional';

    protected $fillable = [
        'province',
        'district',
    ];
}
