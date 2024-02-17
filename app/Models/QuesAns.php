<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class QuesAns extends Model
{
    use HasFactory, SearchableTrait;
    protected $fillable = ['userid', 'category' ,'question','answer','details','session_id','status'];

     protected $searchable = [

        'columns' => [
            'ques_ans.userid' => 10,
            'ques_ans.category' => 10,
        ],
    ];


    public function users(){
    	return $this->hasOne(User::class,'id', 'userid');
    }
      public function categories(){
    	return $this->hasOne(Category::class,'id', 'category');
    }
      public function address(){
        return $this->hasOne(UserAddress::class,'user_id','userid');
      }

}
