<?php

namespace App\Http\Controllers;

use Auth;
use Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = DB::table('users')->get();
        return view('pengguna.index', compact('user'));
    }

    public function create()
    {
        $kodes = DB::table('profits')->get();
        return view('pengguna.create', compact('kodes'));
    }

    public function store(Request $request)
    {
        $this->validate($request,
        [
            'username' => 'required|unique:users',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6|confirmed',
            'nama' => 'required|string|max:255',
            'profit_id' => 'required',
            'role_id'   => 'required'
        ]);

        $data = [
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'nama' => $request->nama,
            'profit_id' => $request->profit_id,
            'role_id' => $request->role_id,
            'created_at' => Carbon::now('Asia/Jakarta')
        ];

        $query = DB::table('users')->insert($data);
        return redirect('admin/setting_user');
    }
    public function edit(Request $request, $id)
    {
        $users = DB::table('users')
                    ->join('profits','profits.id','=','users.profit_id')
                    ->join('roles','roles.id','=','users.role_id')
                    ->select('users.*', 'profits.kode_profit', 'roles.')
                    ->where('id', $id)->first();
    }
}
