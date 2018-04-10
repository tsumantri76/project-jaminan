<?php

use App\Penawaranbg;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
// use DB;
function getkodeprofit()
{
    $profit_id = Auth::user()->profit_id;
    $query = DB::select("select kode_profit from profits where id = '$profit_id'");
    $kode_profit='';
    foreach ($query as $row){
        $kode_profit =$row->kode_profit;
    }

    return $kode_profit;
}

function getbandara()
{
    $profit_id = Auth::user()->profit_id;
    $query = DB::select("select nama_bandara from bandaras where id = '$profit_id'");
    $nama_bandara='';
    foreach ($query as $row){
        $nama_bandara =$row->nama_bandara;
    }
    return $nama_bandara;
}

function getbank()
{
    $id_bandara = Auth::user()->id_bandara;
    $query = DB::select("select * from rekenings where id_bandara = '$id_bandara'");
    
    return compact($query);
}

function getnopenawaranbg()
{
    $profit_id = Auth::user()->profit_id;
    $query = DB::select("select kode_profit from profits where id = '$profit_id'");
    $kode_profit='';
    foreach ($query as $row){
        $kode_profit =$row->kode_profit;
    }

    $month = Carbon::now('Asia/Jakarta')->format('m');
    $year = Carbon::now('Asia/Jakarta')->format('Y');

    $query = DB::select("select max(no_urut) as no_urut from penawaranbgs where tahun = '$year'");
    $current_no='';
    foreach ($query as $row){
        $current_no =$row->no_urut;
    }

    if($current_no !='')
    {
        $current_no_urut = str_replace('0','',$current_no)+1;
        $nopenawaranbg = "No.".getnourut($current_no_urut)."/WAR-BG/".$month."/".$year."/".$kode_profit;
    }
    else
    {
        $current_no_urut = 1;
        $nopenawaranbg = "No.".getnourut($current_no_urut)."/WAR-BG/".$month."/".$year."/".$kode_profit;
    }

    return $nopenawaranbg;
}

function getnopenawarantunai()
{
    $profit_id = Auth::user()->profit_id;
    $query = DB::select("select kode_profit from profits where id = '$profit_id'");
    $kode_profit='';
    foreach ($query as $row){
        $kode_profit =$row->kode_profit;
    }

    $month = Carbon::now('Asia/Jakarta')->format('m');
    $year = Carbon::now('Asia/Jakarta')->format('Y');

    $query = DB::select("select max(no_urut) as no_urut from penawarantunais where tahun = '$year'");
    $current_no='';
    foreach ($query as $row){
        $current_no =$row->no_urut;
    }

    if($current_no !='')
    {
        $current_no_urut = str_replace('0','',$current_no)+1;
        $nopenawarantunai = "No.".getnourut($current_no_urut)."/WAR-TUNAI/".$month."/".$year."/".$kode_profit;
    }
    else
    {
        $current_no_urut = 1;
        $nopenawarantunai = "No.".getnourut($current_no_urut)."/WAR-TUNAI/".$month."/".$year."/".$kode_profit;
    }

    return $nopenawarantunai;
}

function getnopelaksanaanbg()
{
    $id_bandara = Auth::user()->id_bandara;
    $query = DB::select("select kode_profit from profits where id_bandara = '$id_bandara'");
    $kode_profit='';
    foreach ($query as $row){
        $kode_profit =$row->kode_profit;
    }

    $month = Carbon::now('Asia/Jakarta')->format('m');
    $year = Carbon::now('Asia/Jakarta')->format('Y');

    $query = DB::select("select max(no_urut) as no_urut from pelaksanaanbgs where bulan = '$month' and tahun = '$year'");
    $current_no='';
    foreach ($query as $row){
        $current_no =$row->no_urut;
    }

    if($current_no !='')
    {
        $current_no_urut = str_replace('0','',$current_no)+1;
        $nopelaksanaanbg = "No.".getnourut($current_no_urut)."/LAK-BG/".$month."/".$year."/".$kode_profit;
    }
    else
    {
        $current_no_urut = 1;
        $nopelaksanaanbg = "No.".getnourut($current_no_urut)."/LAK-BG/".$month."/".$year."/".$kode_profit;
    }

    return $nopelaksanaanbg;
}

function getnosuratketbg()
{
    $id_bandara = Auth::user()->id_bandara;
    $query = DB::select("select kode_profit from profits where id_bandara = '$id_bandara'");
    $kode_profit='';
    foreach ($query as $row){
        $kode_profit =$row->kode_profit;
    }

    $month = Carbon::now('Asia/Jakarta')->format('m');
    $year = Carbon::now('Asia/Jakarta')->format('Y');

    $query = DB::select("select max(no_urut) as no_urut from pelaksanaanbgs where bulan = '$month' and tahun = '$year'");
    $current_no='';
    foreach ($query as $row){
        $current_no =$row->no_urut;
    }

    if($current_no !='')
    {
        $current_no_urut = str_replace('0','',$current_no)+1;
        $nopelaksanaanbg = "No.".getnourut($current_no_urut)."/SKET/LAK-BG/".$month."/".$year."/".$kode_profit;
    }
    else
    {
        $current_no_urut = 1;
        $nopelaksanaanbg = "No.".getnourut($current_no_urut)."/SKET/LAK-BG/".$month."/".$year."/".$kode_profit;
    }

    return $nopelaksanaanbg;
}

function getnopelaksanaantunai()
{
    $id_bandara = Auth::user()->id_bandara;
    $query = DB::select("select kode_profit from profits where id_bandara = '$id_bandara'");
    $kode_profit='';
    foreach ($query as $row){
        $kode_profit =$row->kode_profit;
    }

    $month = Carbon::now('Asia/Jakarta')->format('m');
    $year = Carbon::now('Asia/Jakarta')->format('Y');

    $query = DB::select("select max(no_urut) as no_urut from pelaksanaantunais where bulan = '$month' and tahun = '$year'");
    $current_no='';
    foreach ($query as $row){
        $current_no =$row->no_urut;
    }

    if($current_no !='')
    {
        $current_no_urut = str_replace('0','',$current_no)+1;
        $nopelaksanaantunai = "No.".getnourut($current_no_urut)."/LAK-TUNAI/".$month."/".$year."/".$kode_profit;
    }
    else
    {
        $current_no_urut = 1;
        $nopelaksanaantunai = "No.".getnourut($current_no_urut)."/LAK-TUNAI/".$month."/".$year."/".$kode_profit;
    }

    return $nopelaksanaantunai;
}

function getnourut($no)
{
    
    if(strlen($no) == 1)
    {
        $nourut = '000'.$no;
    }
    elseif (strlen($no) == 2)
    {
        $nourut = '00'.$no;
    }
    elseif (strlen($no) == 3)
    {
        $nourut = '0'.$no;
    }
    elseif (strlen($no) == 4)
    {
        $nourut = $no;
    }

    return $nourut;
}

function kekata($x) {
    $x = abs($x);
    $angka = array("", "satu", "dua", "tiga", "empat", "lima",
    "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
    $temp = "";
    if ($x <12) {
        $temp = " ". $angka[$x];
    } else if ($x <20) {
        $temp = kekata($x - 10). " belas";
    } else if ($x <100) {
        $temp = kekata($x/10)." puluh". kekata($x % 10);
    } else if ($x <200) {
        $temp = " seratus" . kekata($x - 100);
    } else if ($x <1000) {
        $temp = kekata($x/100) . " ratus" . kekata($x % 100);
    } else if ($x <2000) {
        $temp = " seribu" . kekata($x - 1000);
    } else if ($x <1000000) {
        $temp = kekata($x/1000) . " ribu" . kekata($x % 1000);
    } else if ($x <1000000000) {
        $temp = kekata($x/1000000) . " juta" . kekata($x % 1000000);
    } else if ($x <1000000000000) {
        $temp = kekata($x/1000000000) . " milyar" . kekata(fmod($x,1000000000));
    } else if ($x <1000000000000000) {
        $temp = kekata($x/1000000000000) . " trilyun" . kekata(fmod($x,1000000000000));
    }    
        return $temp;
}


function terbilang($x, $style=4) {
    if($x<0) {
        $hasil = "minus ". trim(kekata($x));
    } else {
        $hasil = trim(kekata($x));
    }    
    switch ($style) {
        case 1:
            $hasil = strtoupper($hasil);
            break;
        case 2:
            $hasil = strtolower($hasil);
            break;
        case 3:
            $hasil = ucwords($hasil);
            break;
        default:
            $hasil = ucfirst($hasil);
            break;
    }    
    return $hasil;
}

function TanggalIndo($date){
  $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

  $tahun = substr($date, 0, 4);
  $bulan = substr($date, 5, 2);
  $tgl   = substr($date, 8, 2);

  $result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;  
  return($result);
}

function strtodate($date)
{
    $ketgl = Carbon::parse($date)->format('d/m/Y');

    return $ketgl;
}

function kerp($uang)
{
    $kerupiah = 'Rp. '.number_format($uang,2,',','.');

    return $kerupiah;
}
