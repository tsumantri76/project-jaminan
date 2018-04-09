<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Penawarantunai extends Model
{
    use SoftDeletes;
    protected $table = 'penawarantunais';
    protected $dates = ['deleted_at'];
}
