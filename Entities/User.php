<?php

namespace App\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;

    public $timestamps = True;
    protected $table = 'users';
    protected $fillable = ['cpf', 'name', 'phone','birth', 'gender', 'notes','email', 'status','permission'];
    protected $hidden = ['password', 'remember_token'];
}