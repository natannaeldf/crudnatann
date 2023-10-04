<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class user extends Authenticatable
{
    use HasFactory;

    protected $table = 'tb_user';
    protected $primaykey = 'tb_user';

    protected $fillable = ['name', 'username', 'password'];
}
