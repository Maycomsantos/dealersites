<?php

namespace App\Models;

class Setting extends BaseModel
{
    protected $fillable = [
        'app_name',
        'description',
        'email',
        'phone',
        'logo',
    ];
}
