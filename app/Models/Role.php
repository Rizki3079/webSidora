<?php

namespace App\Models;

use App\Models\User;
use Spatie\Permission\Models\Role as SpatieRole;

class Role extends SpatieRole// astagaa masih drung diganmti bae
{

    public $incrementing = false;

    // In Laravel 6.0+ make sure to also set $keyType
    protected $keyType = 'string';

    protected $guarded = [];
}
