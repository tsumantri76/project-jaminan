<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PelaksanaanController extends Controller
{
    public function indexbg()
    {
        $bg = DB::table('pelaksanaanbgs')->get();
        return view('pelaksanaanbg.index', compact('bg'));
    }

    public function createbg()
    {
        return view('pelaksanaanbg.create', compact('bg'));
    }

    public function storebg(Request $request)
    {
        // if($request->hasFile('file'))
        // {
        //     $request->file
        // }

        $min = date('Y-m-d', strtotime($request->masa_sanggah.'days', strtotime($request->tgl_berakhir)));
        $max = date('Y-m-d', strtotime('30 days', strtotime($min)));
        $cek = [
            'no_terima'     =>$request->no_terima,
            'id_profit'     =>$request->id_profit,
            'id_bank'       =>$request->id_bank,
            'cabang'        =>$request->cabang,
            'no_bankgr'     =>$request->no_bankgr,
            'seri_bankgr'   =>$request->seri_bankgr,
            'id_vendor'     =>$request->id_vendor,
            'tgl_bankgr'    =>$request->tgl_bankgr,
            'nominal_jambg' =>$request->nominal_jambg,
            'pekerjaan'     =>$request->pekerjaan,
            'no_berita'     =>$request->no_berita,
            'jangka_waktu'  =>$request->jangka_waktu,
            'tgl_berlaku'   =>$request->tgl_berlaku,
            'tgl_berakhir'  =>$request->tgl_berakhir,
            'masa_sanggah'  =>$request->masa_sanggah,
            'min_tarik_jaminan' =>$min,
            'max_tarik_jaminan' =>$max,
            'id_unit'       =>$request->id_unit,
            'id_user'       =>$request->id_user,
            'file'          =>$request->file,
            'ket'           =>$request->ket,
            'konfirmasi'    =>$request->konfirmasi,
            'perpanjangan'  =>$request->perpanjangan,
            'penarikan'     =>$request->penarikan,
            'pencairan'     =>$request->pencairan,
            'id_bandara'    =>$request->id_bandara,
            'del_status'    =>$request->del_status,
            'bulan'         =>Carbon::now('Asia/Jakarta')->format('m'),
            'tahun'         =>Carbon::now('Asia/Jakarta')->format('Y'),
            'no_urut'       =>substr($request->no_terima, 3, 4)
        ];

        $tawar = DB::table('pelaksanaanbgs')->insert($cek);
        return redirect('admin/pelaksanaan_bg');
    }

    public function destroybg(Request $request, $id)
    {
        # code...
    }

    // Penawaran Tunai
    public function indextunai()
    {
        $tunai = DB::table('pelaksanaantunais')->get();
        return view('pelaksanaantunai.index', compact('tunai'));
    }

    public function createtunai()
    {
        $banks = DB::table('banks')->get();
        $units = DB::table('units')->get();
        return view('pelaksanaantunai.create2', compact('banks', 'units'));
    }

    public function storetunai()
    {
        # code...
    }

    public function destroytunai(Request $request, $id)
    {
        # code...
    }
}
