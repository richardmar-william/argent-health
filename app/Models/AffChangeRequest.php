<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffChangeRequest extends Model
{
    public $table = "aff_change_requests";
    use HasFactory;
    protected $fillable = ['user_id','email','account_number','aproval_status','affiliate_req_status','name_on_account','sort_code'];
}
