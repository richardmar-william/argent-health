<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referral_wallet extends Model
{
    use HasFactory;
    protected $fillable = [

        'referral_id','user_id','cart_ammount', 'total_ammount', 'aff_coupan_id', 'commission_%', 'commission_ammount', 'payment_status','delivery_status' ,'payment_request_date'

    ];
}
