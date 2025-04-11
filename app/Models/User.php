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

  


    // Set your custom table
    protected $table = 'users';

    // Set your custom primary key
    protected $primaryKey = 'user_ID';

    // If your primary key is not an auto-incrementing integer
    protected $keyType = 'int'; // or 'string' if it's UUID or similar

    protected $fillable = ['email', 'password'];

    protected $hidden = ['password'];
}
