<?php

namespace App\Http\Controllers;

use App\Proyek;
use App\Profit;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RekeningController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekenings = DB::table('rekenings')
                    ->join('profits', 'profits.id','=','rekenings.profit_id')
                    ->select('rekenings.*', 'profits.kode_profit')
                    ->get();

        return view('rekening.index', compact('rekenings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profits = DB::table('profits')->get();
        return view('rekening.create', compact('profits'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validasi
        $this->validate($request,
        [
            'nama_bank'   => 'required',
            'nomor_rekening'       => 'required',
            'profit_id'     => 'required'
        ]);

        $data = [
            'nama_bank' => $request->nama_bank,
            'nomor_rekening' => $request->nomor_rekening,
            'profit_id' =>$request->profit_id,
            'created_at' => Carbon::now('Asia/Jakarta')
        ];

        $rekenings = DB::table('rekenings')->insert($data);
        return redirect('admin/setting_rekening');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $rekenings = DB::table('rekenings')
        //                 ->join('profits', 'rekenings.id', '=', 'profits.id_rekening')
        //                 ->where('rekenings.id', $id)
        //                 ->get();
        // dd($rekenings);

        $rekenings = Proyek::where('id', $id)->first();
       
        $profits = Profit::where('id_rekening', $rekenings->id)->get();

        $banks = DB::table('rekenings')->where('id_rekening', $rekenings->id)->get();

        return view('rekening.show', compact('rekenings', 'profits', 'banks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rekenings = DB::table('rekenings')
                    ->where('id', $id)
                    ->first();

        return view('rekening.edit', ['rekenings' => $rekenings]);
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
            'nama_rekening' => $request->rekening,
            'wilayah' => $request->ket,
            'updated_at' => Carbon::now('Asia/Jakarta')
        ];

        $this->validate($request,
        [
            'nama_rekening' => 'required',
            'wilayah' => 'required'
        ]);

        $rekenings = DB::table('rekenings')
                    ->where('id', $id)
                    ->update($data);
        
        return redirect('admin/setting_rekening');
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

        $profits = DB::table('rekenings')
                    ->where('id', $id)
                    ->update($data);
        
        return redirect('admin/setting_rekening');
    }
}
