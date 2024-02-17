<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temp extends Model
{
    use HasFactory;
    protected $table = 'temp';

    protected $fillable = [
        'session_id',
        'user_id',
        'category_id',
        'jason_data',
        'recommended',
        'product_ids',
        'strength_type',
        'final_price'
    ];
}

