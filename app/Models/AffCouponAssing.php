<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffCouponAssing extends Model
{
    public $table = "affiliate_coupon_assign";
    use HasFactory;
    protected $fillable = ['coupon_id', 'affiliate_id','status'];}
