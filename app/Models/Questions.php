<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    use HasFactory;
    protected $fillable = ['Quesname', 'Quescategory','status'];

	const STATUS_ACTIVE=1;

	  public function options(){
    	return $this->hasMany(QuesOptions::class, 'question_id');
    }
}
