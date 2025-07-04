<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $fillable = [
        'full_name',
        'email',
        'password',
        'phone',
        'username',
    ];


    protected $hidden = [
        'password',
    ];

    public function user()
    {
        return $this->hasMany(Post::class);
    }

    public function posts()
    {
        return $this->belongsTo(User::class);
    }


}
