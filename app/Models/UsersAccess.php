<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersAccess extends Model
{
    use HasFactory;

    protected $table = 'users_access';

    protected $fillable = [];
}