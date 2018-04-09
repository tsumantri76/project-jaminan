<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Penawaranbg extends Model
{
    use SoftDeletes;

    protected $table="penawaranbgs";
    protected $dates = ['deleted_at'];
    // protected $fillable =
    // [
    //     'no_terima',
    //     'id_profit',
    //     'id_bank',
    //     'cabang',
    //     'no_bankgr',
    //     'seri_bankgr',
    //     'id_vendor',
    //     'tgl_bankgr',
    //     'nominal_jambg',
    //     'pekerjaan',
    //     'no_berita',
    //     'jangka_waktu',
    //     'tgl_berlaku',
    //     'tgl_berakhir',
    //     'masa_sanggah',
    //     'min_tarik_jaminan',
    //     'max_tarik_jaminan',
    //     'id_unit',
    //     'id_user',
    //     'file',
    //     'ket',
    //     'konfirmasi',
    //     'perpanjangan',
    //     'penarikan',
    //     'pencairan',
    //     'id_bandara',
    //     'del_status',
    //     'bulan',
    //     'tahun',
    //     'no_urut'
    // ];
}
