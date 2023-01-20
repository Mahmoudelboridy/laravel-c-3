<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    use HasFactory;
    public $table="students";
    protected $fillable=[
        "name",
        "email"
    ];
    protected $hidden=[
        "created_at",
        "updated_at"
    ];

    public function grade(){
        return $this->hasOne(grades::class,'student_id');
    }
   
}