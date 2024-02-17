<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{   
    public $table = "blogcat";
    use HasFactory;
    protected $fillable = ['title', 'slug', 'status'];
}
