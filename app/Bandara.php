<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Bandara extends Model
{
    use SoftDeletes;
    protected $fillable =
    [
        'kode_bandara',
        'nama_bandara',
        'alamat',
        'telp',
        'fax'
    ];
    protected $dates = ['deleted_at'];
}
