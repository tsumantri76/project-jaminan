<?php
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    if(Auth::check())
    {
        return redirect('/admin/dashboard');
    }
    else{
        return view('auth.login');
    }
});

Auth::routes();

Route::GET('/admin/dashboard', 'HomeController@index');
Route::GET('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

// PENGGUNA
Route::GET('/admin/setting_user', 'PenggunaController@index');
Route::GET('/admin/setting_user/create', 'PenggunaController@create');
Route::POST('/admin/setting_user/store', 'PenggunaController@store');
Route::GET('/admin/setting_user/{id}/edit', 'PenggunaController@edit');
Route::PATCH('/admin/setting_user/{id}/update', 'PenggunaController@update');
Route::PATCH('/admin/setting_user/{id}/destroy', 'PenggunaController@destroy');

// UNIT TEKNIS
Route::GET('/admin/setting_unit', 'UnitController@index');
Route::GET('/admin/setting_unit/create', 'UnitController@create');
Route::POST('/admin/setting_unit/store', 'UnitController@store');
Route::GET('/admin/setting_unit/{id}/edit', 'UnitController@edit');
Route::PATCH('/admin/setting_unit/{id}/update', 'UnitController@update');
Route::PATCH('/admin/setting_unit/{id}/destroy', 'UnitController@destroy');

//BANDARA
Route::GET('/admin/setting_bandara', 'BandaraController@index');
Route::GET('/admin/setting_bandara/create', 'BandaraController@create');
Route::POST('/admin/setting_bandara/store', 'BandaraController@store');
Route::GET('/admin/setting_bandara/{id}/edit', 'BandaraController@edit');
Route::PATCH('/admin/setting_bandara/{id}/update', 'BandaraController@update');
Route::PATCH('/admin/setting_bandara/{id}/destroy', 'BandaraController@destroy');

//PROFIT
Route::GET('/admin/setting_profit', 'ProfitController@index');
Route::GET('/admin/setting_profit/create', 'ProfitController@create');
Route::POST('/admin/setting_profit/store', 'ProfitController@store');
Route::GET('/admin/setting_profit/{id}/edit', 'ProfitController@edit');
Route::PATCH('/admin/setting_profit/{id}/update', 'ProfitController@update');
Route::PATCH('/admin/setting_profit/{id}/destroy', 'ProfitController@destroy');

//REKENING
Route::GET('/admin/setting_rekening', 'RekeningController@index');
Route::GET('/admin/setting_rekening/create', 'RekeningController@create');
Route::POST('/admin/setting_rekening/store', 'RekeningController@store');
Route::GET('/admin/setting_rekening/{id}/show', 'RekeningController@show');
Route::GET('/admin/setting_rekening/{id}/edit', 'RekeningController@edit');
Route::PATCH('/admin/setting_rekening/{id}/update', 'RekeningController@update');
Route::PATCH('/admin/setting_rekening/{id}/destroy', 'RekeningController@destroy');

//BANK
Route::GET('/admin/setting_bank', 'BankController@index');
Route::GET('/admin/setting_bank/create', 'BankController@create');
Route::POST('/admin/setting_bank/store', 'BankController@store');
Route::GET('/admin/setting_bank/{id}/edit', 'BankController@edit');
Route::PATCH('/admin/setting_bank/{id}/update', 'BankController@update');
Route::PATCH('/admin/setting_bank/{id}/destroy', 'BankController@destroy');

//VENDOR
Route::resource('/admin/setting_vendor', 'VendorController');

// PENAWARAN BANK GARANSI
Route::GET('/admin/penawaran_bg', 'PenawaranController@indexbg');
Route::GET('/admin/penawaran_bg/create', 'PenawaranController@createbg');
Route::POST('/admin/penawaran_bg/store', 'PenawaranController@storebg');
Route::PATCH('/admin/penawaran_bg/{id}/destroy', 'PenawaranController@destroybg');
Route::GET('/admin/penawaran_bg/{id}/status', 'PenawaranController@statusbg');
Route::PATCH('/admin/penawaran_bg/{id}/updatestatus', 'PenawaranController@updatestatusbg');
Route::GET('/admin/penawaran_bg/{id}/view', 'PenawaranController@tampilfilebg');
Route::GET('/admin/penawaran_bg/{id}/print', 'PenawaranController@printbg');

//PENAWARAN TUNAI
Route::GET('/admin/penawaran_tunai', 'PenawaranController@indextunai');
Route::GET('/admin/penawaran_tunai/create', 'PenawaranController@createtunai');
Route::POST('/admin/penawaran_tunai/store', 'PenawaranController@storetunai');
Route::PATCH('/admin/penawaran_tunai/{id}/destroy', 'PenawaranController@destroytunai');

//PELAKSANAAN BANK GARANSI
Route::GET('/admin/pelaksanaan_bg', 'PelaksanaanController@indexbg');
Route::GET('/admin/pelaksanaan_bg/create', 'PelaksanaanController@createbg');
Route::POST('/admin/pelaksanaan_bg/store', 'PelaksanaanController@storebg');
Route::PATCH('/admin/pelaksanaan_bg/{id}/destroy', 'PelaksanaanController@destroybg');

//PELAKSANAAN TUNAI
Route::GET('/admin/pelaksanaan_tunai', 'PelaksanaanController@indextunai');
Route::GET('/admin/pelaksanaan_tunai/create', 'PelaksanaanController@createtunai');
Route::POST('/admin/pelaksanaan_tunai/store', 'PelaksanaanController@storetunai');
Route::PATCH('/admin/pelaksanaan_tunai/{id}/destroy', 'PelaksanaanController@destroytunai');
