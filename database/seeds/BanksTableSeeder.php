<?php

use App\Bank;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banks')->insert(
            [
                'nama_bank'  => 'BRI',
                'cabang'  => 'Bandara I Gusti Ngurah Rai',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ]);
        DB::table('banks')->insert(
            [
                'nama_bank'  => 'BNI',
                'cabang'  => 'Bandara I Gusti Ngurah Rai',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ]);
        DB::table('banks')->insert(
            [
                'nama_bank'  => 'MANDIRI',
                'cabang'  => 'Bandara I Gusti Ngurah Rai',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ]);
        DB::table('banks')->insert(
            [
                'nama_bank'  => 'BCA',
                'cabang'  => 'Bandara I Gusti Ngurah Rai',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ]);
    }
}
