<?php

namespace App\Models;

use App\Models\Comment;
use App\Models\Profile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
