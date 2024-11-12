<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'image',
        'post',
        'location',

    ];
    use HasApiTokens, HasFactory;

    public function post()
    {
        return $this->belongsTo(User::class);
    }
}
