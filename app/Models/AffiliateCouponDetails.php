<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffiliateCouponDetails extends Model
{
    use HasFactory;

    public $table = "affiliate_coupon_details";
    protected $fillable = ['coupon_id','cat_id','value','commission'];
}
