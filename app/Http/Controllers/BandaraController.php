<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BandaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bandara = DB::table('bandaras')->get();
        return view('bandara.index', compact('bandara'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bandara.create');
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
            'kode_bandara' => 'required',
            'nama_bandara' => 'required',
            'alamat'       => 'required',
            'telpon'         => 'required',
            'fax'          => 'required'
        ]);

        $data = [
            'kode_bandara'   => $request->kode_bandara,
            'nama_bandara'    => $request->nama_bandara,
            'alamat'        => $request->alamat,
            'telp'          => $request->telpon,
            'fax'           => $request->fax,
            'created_at'    => Carbon::now('Asia/Jakarta')
        ];

        $profits = DB::table('bandaras')->insert($data);
        return redirect('admin/setting_bandara');
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
        $bandaras = DB::table('bandaras')->where('id', $id)->first();
        return view('bandara.edit', compact('bandaras'));
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
            'kode_bandara' => 'required',
            'nama_bandara' => 'required',
            'alamat'       => 'required',
            'telpon'        => 'required',
            'fax'          => 'required'
        ]);

        $data = [
            'kode_bandara'  => $request->kode_bandara,
            'nama_bandara'  => $request->nama_bandara,
            'alamat'        => $request->alamat,
            'telp'          => $request->telpon,
            'fax'           => $request->fax,
            'updated_at'    => Carbon::now('Asia/Jakarta')
        ];

        $profits = DB::table('bandaras')->where('id', $id)->update($data);
        return redirect('admin/setting_bandara');
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
