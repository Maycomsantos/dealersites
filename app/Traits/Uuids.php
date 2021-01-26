<?php

namespace App\Traits;

use Ramsey\Uuid\Uuid;

trait Uuids
{
    public static function bootUuids()
    {
        static::creating(function ($model) {
            $model->uuid = Uuid::uuid4();
        });
    }
}
