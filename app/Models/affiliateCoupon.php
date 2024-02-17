<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class affiliateCoupon extends Model
{
    public $table = "affiliatecoupon";
    use HasFactory;
    protected $fillable = ['cat_id','cat_name', 'code', 'type', 'value','commission','start_date' ,'expire_date','status','assign'];

}
