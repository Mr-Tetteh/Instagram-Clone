<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'image',
        'post',
        'location',

    ];
    use HasFactory;

//    public function post()
//    {
//        return $this->belongsTo(User::class);
//    }
}
