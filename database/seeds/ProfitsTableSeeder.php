<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProfitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profits')->insert(
            [
                'kode_profit' => '1100000000',
                'nama_proyek'   => 'HO',
                'bandara_id'   => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        DB::table('profits')->insert(
            [
                'kode_profit' => '1100009005',
                'nama_proyek'   => 'HO',
                'bandara_id'   => '2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        DB::table('profits')->insert(
            [
                'kode_profit' => '1100009006',
                'nama_proyek'   => 'HO',
                'bandara_id'   => '3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        DB::table('profits')->insert(
            [
                'kode_profit' => '1100009007',
                'nama_proyek'   => 'HO',
                'bandara_id'   => '4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        DB::table('profits')->insert(
            [
                'kode_profit' => '1111000000',
                'nama_proyek'   => 'HO',
                'bandara_id'   => '5',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        DB::table('profits')->insert(
            [
                'kode_profit' => '1112000000',
                'nama_proyek'   => 'HO',
                'bandara_id'   => '6',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        DB::table('profits')->insert(
            [
                'kode_profit' => '1113000000',
                'nama_proyek'   => 'HO',
                'bandara_id'   => '7',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        DB::table('profits')->insert(
            [
                'kode_profit' => '1114000000',
                'nama_proyek'   => 'HO',
                'bandara_id'   => '8',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        DB::table('profits')->insert(
            [
                'kode_profit' => '1121000000',
                'nama_proyek'   => 'HO',
                'bandara_id'   => '9',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        DB::table('profits')->insert(
            [
                'kode_profit' => '1122000000',
                'nama_proyek'   => 'HO',
                'bandara_id'   => '10',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        DB::table('profits')->insert(
            [
                'kode_profit' => '1131000000',
                'nama_proyek'   => 'HO',
                'bandara_id'   => '11',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        DB::table('profits')->insert(
            [
                'kode_profit' => '1133000000',
                'nama_proyek'   => 'HO',
                'bandara_id'   => '12',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        DB::table('profits')->insert(
            [
                'kode_profit' => '1140000000',
                'nama_proyek'   => 'HO',
                'bandara_id'   => '13',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        DB::table('profits')->insert(
            [
                'kode_profit' => '1141000000',
                'nama_proyek'   => 'HO',
                'bandara_id'   => '14',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        DB::table('profits')->insert(
            [
                'kode_profit' => '1142000000',
                'nama_proyek'   => 'HO',
                'bandara_id'   => '15',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        DB::table('profits')->insert(
            [
                'kode_profit' => '1143000000',
                'nama_proyek'   => 'HO',
                'bandara_id'   => '16',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        DB::table('profits')->insert(
            [
                'kode_profit' => '1151000000',
                'nama_proyek'   => 'HO',
                'bandara_id'   => '17',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        DB::table('profits')->insert(
            [
                'kode_profit' => '1152000000',
                'nama_proyek'   => 'HO',
                'bandara_id'   => '18',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
    }
}
