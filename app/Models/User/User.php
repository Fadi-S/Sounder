<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    protected $fillable = ['name', 'email', 'password', 'username', 'picture'];

    protected $hidden = ['password', 'remember_token', 'api_token', 'refresh_token', 'api_token_time'];

    protected $casts = ['email_verified_at' => 'datetime'];
}
