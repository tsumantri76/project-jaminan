<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Auth;
use PDF;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PenawaranController extends Controller
{
    public function indexbg()
    {
        $bg = DB::table('penawaranbgs')
                ->join('banks', 'banks.id','=','penawaranbgs.bank_id')
                ->select('penawaranbgs.*', 'banks.nama_bank')
                ->get();
        return view('penawaranbg.index', compact('bg'));
    }

    public function createbg()
    {
        $profit_id = Auth::user()->profit_id;
        $banks = DB::table('banks')->get();
        $units = DB::table('units')->get();
        return view('penawaranbg.create', compact('banks', 'units'));
    }

    public function storebg(Request $request)
    {
        $filetype = 'PDF,pdf';
        $filesize = 3000;

        $this->validate($request,
        [
            'file' => 'required|file|mimes:'.$filetype.'|max:'.$filesize
        ],
        [
            'file.mimes' => 'Harus berekstensi .PDF atau .pdf',
            'file.max'  => 'File berukuran lebih dari 3MB'
        ]);
        
        $uploadedFile = $request->file('file');
        $originalname = $uploadedFile->getClientOriginalName();
        $originalext  = $uploadedFile->getClientOriginalExtension();
        $newname = $request->nama_file.'.'.$originalext;
        $path = $uploadedFile->store('public/files');

        $min = date('Y-m-d', strtotime($request->masa_sanggah.'days', strtotime($request->tgl_berakhir)));
        $max = date('Y-m-d', strtotime('30 days', strtotime($min)));
        $cek = [
            'no_terima'     =>$request->no_terima,
            'profit_id'     =>$request->profit_id,
            'bank_id'       =>$request->bank_id,
            'wilayah'       =>$request->wilayah,
            'cabang'        =>$request->cabang,
            'no_bankgr'     =>$request->no_bankgr,
            'seri_bankgr'   =>$request->seri_bankgr,
            'vendor_id'     =>$request->vendor_id,
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
            'unit_id'       =>$request->unit_id,
            'user_id'       =>$request->user_id,
            'nama_file'     =>$uploadedFile,
            'path_file'     =>$path,
            'ket'           =>$request->ket,
            'created_at'    => Carbon::now('Asia/Jakarta'),
            'bulan'         =>Carbon::now('Asia/Jakarta')->format('m'),
            'tahun'         =>Carbon::now('Asia/Jakarta')->format('Y'),
            'no_urut'       =>substr($request->no_terima, 3, 4)
        ];

        // dd($cek);
        $tawar = DB::table('penawaranbgs')->insert($cek);
        return redirect('admin/penawaran_bg');
    }

    public function destroybg(Request $request, $id)
    {
        # code...
    }

    public function statusbg($id)
    {
        $cek = DB::table('penawaranbgs')
                ->join('rekenings', 'rekenings.id','=','penawaranbgs.bank_id')
                ->join('profits', 'profits.id','=','penawaranbgs.profit_id')
                ->select('penawaranbgs.*', 'rekenings.nama_bank', 'profits.kode_profit')
                ->where('penawaranbgs.id', $id)
                ->first();
        return view('penawaranbg.status', compact('cek'));
    }

    public function updatestatusbg(Request $request, $id)
    {
        if($request->perpanjangan)
        {
            $data = [
                'perpanjangan' => $request->perpanjangan
            ];

            $q = DB::table('penawaranbgs')
                    ->where('id', $id)
                    ->update($data);
            
            return redirect('admin/penawaran_bg');
        }
        elseif($request->pencairan)
        {
            $data = [
                'pencairan' => $request->pencairan
            ];

            $q = DB::table('penawaranbgs')
                    ->where('id', $id)
                    ->update($data);
            
            return redirect('admin/penawaran_bg');
        }
        elseif($request->penarikan)
        {
            $data = [
                'penarikan' => $request->penarikan
            ];

            $q = DB::table('penawaranbgs')
                    ->where('id', $id)
                    ->update($data);
            
            return redirect('admin/penawaran_bg');
        }
    }

    public function tampilfilebg($id)
    {
        $cek = DB::table('penawaranbgs')->where('id', $id)->first();
        $nama = $cek->nama_file;
        $printname = 'WAR-BG'.Carbon::now('Asia/Jakarta')->format('Ymdhis');
        $dir = $cek->path_file;
        $view = Storage::response($dir); 

        return $view;
    }

    public function printbg($id)
    {
        $cek = DB::table('penawaranbgs')
                    ->join('banks', 'banks.id','=','penawaranbgs.bank_id')
                    ->select('penawaranbgs.*', 'banks.nama_bank')
                    ->where('penawaranbgs.id', $id)->first();
        $printname = 'WAR-BG'.Carbon::now('Asia/Jakarta')->format('Ymdhis');
        $pdf = PDF::loadView('penawaranbg.show', compact('cek'))->setPaper('a4', 'potrait')->setWarnings(false);
        return $pdf->stream($printname.'.pdf');
    }

    // Penawaran Tunai
    public function indextunai()
    {
        $tunai = DB::table('penawarantunais')->get();
        return view('penawarantunai.index', compact('tunai'));
    }

    public function createtunai()
    {
        $bandara_id = Auth::user()->bandara_id;
        $banks = DB::select("select * from rekenings where bandara_id = '$bandara_id'");
        $units = DB::table('units')->get();
        return view('penawarantunai.create', compact('banks', 'units'));
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
