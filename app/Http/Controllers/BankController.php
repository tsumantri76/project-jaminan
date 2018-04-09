<?php

namespace App\Http\Controllers;

use App\Proyek;
use App\Profit;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banks = DB::table('banks')
                ->where('del_status','=','TIDAK')
                ->get();
        
        return view('bank/index', ['banks'  => $banks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proyeks = DB::table('proyeks')
                    ->where('del_status','=','TIDAK')
                    ->get();
        $profits = DB::table('profits')
                    ->where('del_status','=','TIDAK')
                    ->get();

        return view('bank/create', compact('proyeks', 'profits'));
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
            'bank'          => 'required|string',
            'cabang'        => 'required|string',
            'rekening'      =>  'required',
            'id_proyek'     => 'required',
            'id_profit'     => 'required',
            'del_status'    => 'required',
            'created_at'    => Carbon::now('Asia/Jakarta')
        ]);

        $data = [
            'bank'          => $request->bank,
            'cabang'        => $request->cabang,
            'rekening'      => $request->rekening,
            'id_proyek'     => $request->id_proyek,
            'id_profit'     => $request->id_profit,
            'del_status'    => $request->del_status,
            'created_at'    => Carbon::now('Asia/Jakarta')
        ];

        $profits = DB::table('banks')->insert($data);
        return redirect('admin/setting_bank');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banks = DB::table('banks')
                    ->join('proyeks', 'proyeks.id','=','banks.id_proyek')
                    ->join('profits', 'profits.id','=','banks.id_profit')
                    ->select('banks.*', 'profits.kode_profit', 'proyeks.proyek')
                    ->where('banks.id', $id)
                    ->first();
        // dd($profits);
        $proyeks = DB::table('proyeks')
                    ->where('del_status','=','TIDAK')
                    ->get();
        $profits = DB::table('profits')
                    ->where('del_status','=','TIDAK')
                    ->get();

        return view('bank.edit', compact('banks', 'profits', 'proyeks'));
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
        $this->validate($request,
        [
            'bank'          => 'required|string',
            'cabang'        => 'required|string',
            'rekening'      =>  'required',
            'id_proyek'     => 'required',
            'id_profit'     => 'required',
            'del_status'    => 'required',
            'updated_at'    => Carbon::now('Asia/Jakarta')
        ]);

        $data = [
            'bank'          => $request->bank,
            'cabang'        => $request->cabang,
            'rekening'      => $request->rekening,
            'id_proyek'     => $request->id_proyek,
            'id_profit'     => $request->id_profit,
            'del_status'    => $request->del_status,
            'updated_at'    => Carbon::now('Asia/Jakarta')
        ];

        $profits = DB::table('banks')
                    ->where('id', $id)
                    ->update($data);

        return redirect('admin/setting_bank');
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

        $profits = DB::table('banks')
                    ->where('id', $id)
                    ->update($data);

        // dd($request->all());
        
        return redirect('admin/setting_bank');
    }
}