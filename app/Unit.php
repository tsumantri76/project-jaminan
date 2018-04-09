<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use SoftDeletes;
    protected $table = 'units';
    protected $dates = ['deleted_at'];
}
