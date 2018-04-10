<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Penawaranbg extends Model
{
    use SoftDeletes;

    protected $table="penawaranbgs";
    protected $dates = ['deleted_at'];
}
