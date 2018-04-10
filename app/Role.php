<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use SoftDeletes;
    protected $filablle =
    [
        'role'
    ];
    protected $dates = ['deleted_at'];
}
