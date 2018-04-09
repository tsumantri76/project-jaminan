<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $units = DB::table('units')->get();
        return view('unit.index', compact('units'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bandaras = DB::table('bandaras')->get();
        return view('unit.create', compact('bandaras'));
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
                'kode_unit'     => 'required',
                'nama_unit'     => 'required',
                'bandara_id'    => 'required'
            ]            
        );
        $data = [
            'kode_unit' => $request->kode_unit,
            'nama_unit' => $request->nama,
            'bandara_id' => $request->bandara_id
        ];

        $cek = DB::table('units')->insert($data);
        return redirect('admin/setting_unit');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $units = DB::table('units')
                ->where('id', $id)
                ->first();
        return view('unit.edit', compact('units'));
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
                'kode_unit'     => 'required',
                'nama_unit'     => 'required',
                'bandara_id'    => 'required'
            ]            
        );
        $data = [
            'kode_unit' => $request->kode_unit,
            'nama_unit' => $request->nama,
            'bandara_id' => $request->bandara_id
        ];

        $cek = DB::table('units')->where('id', $id)->update($data);
        return redirect('admin/setting_unit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
