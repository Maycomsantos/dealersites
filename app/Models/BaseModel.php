<?php

namespace App\Models;

use App\Traits\EnableLogs;
use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class BaseModel extends Model
{
    use SoftDeletes, EnableLogs;

    protected $filters = [];

    public function scopeActives($query)
    {
        return $query->whereStatus(1);
    }

    public function scopeSearch($query)
    {
        return $query->whereLike($this->filters, request()->search);
    }
}
