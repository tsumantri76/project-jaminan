<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use SoftDeletes;
    protected $fillable =
    [
        'nama_bank',
        'cabang'
    ];
    protected $dates = ['deleted_at'];
}
