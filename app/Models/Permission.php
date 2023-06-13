<?php

namespace App\Models;

use App\Traits\Uuid;
use Spatie\Permission\Models\Permission as Model;

class Permission extends Model
{

    public $incrementing = false;

    // In Laravel 6.0+ make sure to also set $keyType
    protected $keyType = 'string';

    protected $guarded = [];
}
