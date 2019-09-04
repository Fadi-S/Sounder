<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Admin extends Model
{
    use Notifiable, SoftDeletes, AdminAttributes;

    protected $fillable = ['name', 'email', 'username', 'password', 'role_id', 'picture'];

    protected $hidden = ['password', 'remember_token'];

}
