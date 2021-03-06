<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Auth;
use PDF;
use PhpOffice\PhpWord\Settings;
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
        $newname = $originalname.'.'.$originalext;
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
            'nama_file'     =>$newname,
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
                ->join('banks', 'banks.id','=','penawaranbgs.bank_id')
                ->join('profits', 'profits.id','=','penawaranbgs.profit_id')
                ->select('penawaranbgs.*', 'banks.nama_bank', 'profits.kode_profit')
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
        // $pdf = PDF::loadView('penawaranbg.show', compact('cek'));
        // return $pdf->download($printname.'.docx');

        $file = Storage::get('public/template/templatewarbg.rtf');

        $file = str_replace("#no_terima", $cek->no_terima, $file);
        $file = str_replace("#vendor_id", $cek->vendor_id, $file);
        $file = str_replace("#nama_bank", $cek->nama_bank, $file);
        $file = str_replace("#no_bankgr", $cek->no_bankgr, $file);
        $file = str_replace("#seri_bankgr", $cek->seri_bankgr, $file);
        $file = str_replace("#tgl_bankgr", strtodate($cek->tgl_bankgr), $file);
        $file = str_replace("#nominal_jambg", kerp($cek->nominal_jambg), $file);
        $file = str_replace("#pekerjaan", $cek->pekerjaan, $file);
        $file = str_replace("#terbilang", terbilang($cek->nominal_jambg, $style=3), $file);
        $file = str_replace("#tgl_berlaku", strtodate($cek->tgl_berlaku), $file);
        $file = str_replace("#tgl_berakhir", strtodate($cek->tgl_berakhir), $file);
        $file = str_replace("#ket", $cek->ket, $file);
        $file = str_replace("#dibuat", Carbon::now('Asia/Jakarta')->format('d/m/Y'), $file);
        if($cek->profit_id == 1)
        {
            $file = str_replace("#dep", "Dept. Head Bidang Treasury", $file);
        }
        else{
            $file = str_replace("#dep", "Section Head Bidang Finance", $file);
        }

        header('Content-Description: File Transfer');
        header('Content-type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        header("Content-disposition: inline; filename=\"{$printname}.doc\"");
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header("Content-length: ".strlen($file));
        ob_clean();
        flush();
        echo $file;
    }

    // Penawaran Tunai
    public function indextunai()
    {
        $tunai = DB::table('penawarantunais')
                    ->join('banks','banks.id','=','penawarantunais.bank_id')
                    ->select('penawarantunais.*', 'banks.nama_bank')
                    ->get();
        return view('penawarantunai.index', compact('tunai'));
    }

    public function createtunai()
    {
        $banks = DB::table('banks')->get();
        $units = DB::table('units')->get();
        return view('penawarantunai.create', compact('banks', 'units'));
    }


    public function storetunai(Request $request)
    {
        $tempo = date('Y-m-d', strtotime($request->jangka_waktu.'days', strtotime($request->tgl_penerimaan)));
        $min = date('Y-m-d', strtotime($request->masa_sanggah.'days', strtotime($tempo)));

        $cek = [
            "no_terima" => $request->no_terima,
            "wilayah" => $request->wilayah,
            "pekerjaan" => $request->pekerjaan,
            "vendor_id" => $request->vendor_id,
            "unit_id" => $request->unit_id,
            "bank_id" => $request->bank_id,
            "nama_bank_tunai" => $request->tunai,
            "tgl_penerimaan" => $request->tgl_penerimaan,
            "nominal_jamper" => $request->nominal_jamper,
            "no_kwitansi" => $request->no_kwitansi,
            "no_berita" => $request->no_berita,
            "jangka_waktu" => $request->jangka_waktu,
            "jatuh_tempo" => $tempo,
            "masa_sanggah" => $request->masa_sanggah,
            "min_tarik_jaminan" => $min,
            "ket" => $request->ket,
            "user_id" => $request->user_id,
            "profit_id" => $request->profit_id,
            "file1" => $request->file1,
            "file2" => $request->file2,
            "created_at"    => Carbon::now('Asia/Jakarta'),
            "bulan"         =>Carbon::now('Asia/Jakarta')->format('m'),
            "tahun"         =>Carbon::now('Asia/Jakarta')->format('Y'),
            "no_urut"       =>substr($request->no_terima, 3, 4)
        ];

        $query = DB::table('penawarantunais')->insert($cek);
        return redirect('admin/penawaran_tunai');
    }

    public function destroytunai(Request $request, $id)
    {
        # code...
    }

    public function statustunai($id)
    {
        $cek = DB::table('penawarantunais')
                ->join('banks', 'banks.id','=','penawarantunais.bank_id')
                ->join('profits', 'profits.id','=','penawarantunais.profit_id')
                ->select('penawarantunais.*', 'banks.nama_bank', 'profits.kode_profit')
                ->where('penawarantunais.id', $id)
                ->first();
        return view('penawarantunai.status', compact('cek'));
    }

    public function updatestatustunai(Request $request, $id)
    {
        if($request->perpanjangan)
        {
            $data = [
                'perpanjangan' => $request->perpanjangan
            ];

            $q = DB::table('penawarantunais')
                    ->where('id', $id)
                    ->update($data);
            
            return redirect('admin/penawaran_tunai');
        }
        elseif($request->pencairan)
        {
            $data = [
                'pencairan' => $request->pencairan
            ];

            $q = DB::table('penawarantunais')
                    ->where('id', $id)
                    ->update($data);
            
            return redirect('admin/penawaran_tunai');
        }
        elseif($request->penarikan)
        {
            $data = [
                'penarikan' => $request->penarikan
            ];

            $q = DB::table('penawarantunais')
                    ->where('id', $id)
                    ->update($data);
            
            return redirect('admin/penawaran_tunai');
        }
    }

    public function tampilfiletunai($id)
    {
        $cek = DB::table('penawarantunais')->where('id', $id)->first();
        $nama = $cek->nama_file;
        $printname = 'WAR-BG'.Carbon::now('Asia/Jakarta')->format('Ymdhis');
        $dir = $cek->path_file;
        $view = Storage::response($dir); 

        return $view;
    }

    public function printtunai($id)
    {
        $cek = DB::table('penawarantunais')
                    ->join('banks', 'banks.id','=','penawarantunais.bank_id')
                    ->select('penawarantunais.*', 'banks.nama_bank')
                    ->where('penawarantunais.id', $id)->first();
        $printname = 'WAR-BG'.Carbon::now('Asia/Jakarta')->format('Ymdhis');
        // $pdf = PDF::loadView('penawaranbg.show', compact('cek'));
        // return $pdf->download($printname.'.docx');

        $file = Storage::get('public/files/template1.rtf');

        $file = str_replace("#NAMA", $cek->vendor_id, $file);
        header("Content-type: application/msword");
        header("Content-disposition: inline; filename=".$printname.".doc");
        header("Content-length: ".strlen($file));
        echo $file;
    }
}
