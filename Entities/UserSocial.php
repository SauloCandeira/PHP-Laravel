<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserSocial extends Model
{
    use SoftDeletes;
    use Notifiable;

    public $timestamps = True;
    protected $table = 'users';
    protected $fillable = ['cpf', 'name', 'phone','birth', 'gender', 'notes','email', 'status','permission'];
    protected $hidden = ['password', 'remember_token'];
}
