<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use SoftDeletes;
    protected $table = 'vendors';
    protected $dates = ['deleted_at'];
}
