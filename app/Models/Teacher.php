<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = ["user_id", "image", "mobile", "education", "social_handle", "about", "address", "achievement", "objective"];
    protected $cats = ["social_handle" => "array"];
}