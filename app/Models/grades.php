<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class grades extends Model
{
    use HasFactory;
    public $table="grades";
    protected $fillable=[
        "grade",
        "student_id"
    ];
    protected $hidden=[
    ];
    
  

}