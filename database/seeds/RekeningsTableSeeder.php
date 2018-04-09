<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class RekeningsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rekenings')->insert(
                [
                    'nama_bank' => 'BNI',
                    'nomor' => '0010547643',
                    'id_proyek' => 1,
                    'id_bandara' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'BRI',
                'nomor' => '034601000127303',
                'id_proyek' => 1,
                'id_bandara' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'Mandiri',
                'nomor' => '1190095035828',
                'id_proyek' => 1,
                'id_bandara' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'BNI',
                'nomor' => '0536690969',
                'id_proyek' => 2,
                'id_bandara' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'BRI',
                'nomor' => '002901002301303',
                'id_proyek' => 2,
                'id_bandara' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'Mandiri',
                'nomor' => '1370013055203',
                'id_proyek' => 2,
                'id_bandara' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'Mandiri',
                'nomor' => '1350095966667',
                'id_proyek' => 3,
                'id_bandara' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'BNI',
                'nomor' => '0431115003',
                'id_proyek' => 4,
                'id_bandara' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'BNI',
                'nomor' => '0030447215',
                'id_proyek' => 5,
                'id_bandara' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'BRI',
                'nomor' => '002901000900305',
                'id_proyek' => 5,
                'id_bandara' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'Mandiri',
                'nomor' => '1370092015789',
                'id_proyek' => 5,
                'id_bandara' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'BNI',
                'nomor' => '0034106065',
                'id_proyek' => 6,
                'id_bandara' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'BRI',
                'nomor' => '033401000383306',
                'id_proyek' => 6,
                'id_bandara' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'Mandiri',
                'nomor' => '1380092009062',
                'id_proyek' => 6,
                'id_bandara' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'BNI',
                'nomor' => '0029041058',
                'id_proyek' => 7,
                'id_bandara' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'Mandiri',
                'nomor' => '1350095008361',
                'id_proyek' => 7,
                'id_bandara' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'BNI',
                'nomor' => '0054539164',
                'id_proyek' => 8,
                'id_bandara' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'BRI',
                'nomor' => '008601000855302',
                'id_proyek' => 8,
                'id_bandara' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'Mandiri',
                'nomor' => '1410087004198',
                'id_proyek' => 8,
                'id_bandara' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'BNI',
                'nomor' => '0076392817',
                'id_proyek' => 9,
                'id_bandara' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'BRI',
                'nomor' => '012101001049302',
                'id_proyek' => 9,
                'id_bandara' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'Mandiri',
                'nomor' => '1490094016062',
                'id_proyek' => 9,
                'id_bandara' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'BNI',
                'nomor' => '0081313984',
                'id_proyek' => 10,
                'id_bandara' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'BRI',
                'nomor' => '024201000491300',
                'id_proyek' => 10,
                'id_bandara' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'Mandiri',
                'nomor' => '0310096004661',
                'id_proyek' => 10,
                'id_bandara' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'BNI',
                'nomor' => '0065670606',
                'id_proyek' => 11,
                'id_bandara' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'BRI',
                'nomor' => '022401000316308',
                'id_proyek' => 11,
                'id_bandara' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'Mandiri',
                'nomor' => '1520091018321',
                'id_proyek' => 11,
                'id_bandara' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'BNI',
                'nomor' => '0081711282',
                'id_proyek' => 12,
                'id_bandara' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'BRI',
                'nomor' => '005401001150300',
                'id_proyek' => 12,
                'id_bandara' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'Mandiri',
                'nomor' => '1500089001000',
                'id_proyek' => 12,
                'id_bandara' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'BNI',
                'nomor' => '0049395526',
                'id_proyek' => 13,
                'id_bandara' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'BRI',
                'nomor' => '055601000129304',
                'id_proyek' => 13,
                'id_bandara' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'Mandiri',
                'nomor' => '1450080000058',
                'id_proyek' => 13,
                'id_bandara' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'BNI',
                'nomor' => '0041935414',
                'id_proyek' => 14,
                'id_bandara' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'BRI',
                'nomor' => '181601000002307',
                'id_proyek' => 14,
                'id_bandara' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'Mandiri',
                'nomor' => '1450099171569',
                'id_proyek' => 14,
                'id_bandara' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'BNI',
                'nomor' => '0096830257',
                'id_proyek' => 15,
                'id_bandara' => 15,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'BRI',
                'nomor' => '003901001271304',
                'id_proyek' => 15,
                'id_bandara' => 15,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'Mandiri',
                'nomor' => '1450005005729',
                'id_proyek' => 15,
                'id_bandara' => 15,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'BNI',
                'nomor' => '8497999889',
                'id_proyek' => 16,
                'id_bandara' => 16,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'BRI',
                'nomor' => '055601000297301',
                'id_proyek' => 16,
                'id_bandara' => 16,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'Mandiri',
                'nomor' => '1450010400493',
                'id_proyek' => 16,
                'id_bandara' => 16,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'BNI',
                'nomor' => '0085683634',
                'id_proyek' => 17,
                'id_bandara' => 17,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'BRI',
                'nomor' => '000101000477304',
                'id_proyek' => 17,
                'id_bandara' => 17,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'Mandiri',
                'nomor' => '1520004625840',
                'id_proyek' => 17,
                'id_bandara' => 17,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'BNI',
                'nomor' => '0096910280',
                'id_proyek' => 18,
                'id_bandara' => 18,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'BRI',
                'nomor' => '030801000197304',
                'id_proyek' => 18,
                'id_bandara' => 18,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
        DB::table('rekenings')->insert(
            [
                'nama_bank' => 'Mandiri',
                'nomor' => '1540004881334',
                'id_proyek' => 18,
                'id_bandara' => 18,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        );
    }
}
