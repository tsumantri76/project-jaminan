<?php

namespace App\Http\Controllers;

use App\Profit;
use App\Proyek;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProfitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getbank = DB::table('profits')
                    ->join('rekenings', 'rekenings.profit_id','=','profits.id')
                    ->select('profits.*', 'rekenings.nama_bank', 'rekenings.nomor_rekening')
                    ->get();
        
        $profits = DB::table('profits')->get();

        return view('profit.index', compact('profits', 'getbank'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bandaras = DB::table('bandaras')->get();
        return view('profit.create', compact('bandaras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
        [
            'kode_profit' => 'required|min:10|numeric',
            'id_proyek' => 'required'
        ]);

        $data = [
            'kode_profit'   => $request->kode_profit,
            'id_bandara'    => $request->id_bandara,
            'id_proyek'     => $request->id_proyek,
            'del_status'    => $request->del_status,
            'created_at'    => Carbon::now('Asia/Jakarta')
        ];

        $profits = DB::table('profits')->insert($data);
        return redirect('admin/setting_profit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profits = DB::table('profits')
                    ->join('proyeks', 'proyeks.id','=','profits.id_proyek')
                    ->select('profits.id', 'profits.kode_profit', 'profits.del_status', 'profits.id_proyek', 'proyeks.nama_proyek', 'proyeks.wilayah')
                    ->where('profits.id', $id)
                    ->first();
        // dd($profits);
        $proyeks = Proyek::all();

        return view('profit.edit', ['profits' => $profits, 'proyeks' => $proyeks]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = [
            'kode_profit' => $request->kode_profit,
            'id_proyek'   => $request->id_proyek,
            'del_status'  => $request->del_status,
            'updated_at' => Carbon::now('Asia/Jakarta')
        ];

        $this->validate($request,
        [
            'kode_profit' => 'required|min:10|numeric',
            'id_proyek' => 'required'
        ]);

        
        $profits = DB::table('profits')
                    ->where('id', $id)
                    ->update($data);
        
        return redirect('admin/setting_profit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $data = [
            'del_status'  => $request->del_status,
            'updated_at' => Carbon::now('Asia/Jakarta')
        ];

        $profits = DB::table('profits')
                    ->where('id', $id)
                    ->update($data);

        // dd($request->all());
        
        return redirect('admin/setting_profit');
    }

    public function show($id)
    {
        $detail = DB::table('profits')
                    ->join('rekenings', 'rekenings.profit_id','=','profits.id')
                    ->select('profits.*', 'rekenings.nama_bank', 'rekenings.nomor_rekening')
                    ->where('profits.id', $id)
                    ->first();
        return view('profit.show', compact('rekenings', 'profits', 'banks'));
    }
}