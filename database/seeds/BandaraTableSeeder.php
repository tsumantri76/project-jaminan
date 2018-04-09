<?php

use App\Bandaras;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BandaraTableSeeder extends Seeder
{
/**
 * Run the database seeds.
 *
 * @return void
 */
    public function run()
    {
        DB::table('bandaras')->insert(
            [
                'kode_bandara'  => '01',
                'nama_bandara'  => 'Bandara I Gusti Ngurah Rai',
                'alamat'        => 'Denpasar',
                'telp'        => '(0361) 9351011',
                'fax'           => '(0361) 9351032',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ]);
        DB::table('bandaras')->insert(
            [
                'kode_bandara'  => '02',
                'nama_bandara'  => 'Bandara Juanda',
                'alamat'        => 'Surabaya',
                'telp'        => '(0361) 9351011',
                'fax'           => '(0361) 9351032',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ]);
        DB::table('bandaras')->insert(
            [
                'kode_bandara'  => '03',
                'nama_bandara'  => 'Bandara Sultan Hasanuddin',
                'alamat'        => 'Makassar',
                'telp'        => '(0361) 9351011',
                'fax'           => '(0361) 9351032',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ]);
        DB::table('bandaras')->insert(
            [
                'kode_bandara'  => '04',
                'nama_bandara'  => 'Bandara Sultan Aji Muhammad Sulaiman Sepinggan',
                'alamat'        => 'Balikpapan',
                'telp'        => '(0361) 9351011',
                'fax'           => '(0361) 9351032',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ]);
        DB::table('bandaras')->insert(
            [
                'kode_bandara'  => '05',
                'nama_bandara'  => 'Bandara Frans Kaisiepo',
                'alamat'        => 'Biak',
                'telp'        => '(0361) 9351011',
                'fax'           => '(0361) 9351032',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ]);
        DB::table('bandaras')->insert(
            [
                'kode_bandara'  => '06',
                'nama_bandara'  => 'Bandara Sam Ratulangi',
                'alamat'        => 'Manado',
                'telp'        => '(0361) 9351011',
                'fax'           => '(0361) 9351032',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ]);
    }
}
