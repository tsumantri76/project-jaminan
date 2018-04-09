<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Rekening extends Model
{
    use SoftDeletes;
    protected $table = 'rekenings';
    protected $dates = ['deleted_at'];
}
