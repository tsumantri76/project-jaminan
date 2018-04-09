<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Profit extends Model
{
    use SoftDeletes;
    protected $table = 'profits';
    protected $dates = ['deleted_at'];
}
