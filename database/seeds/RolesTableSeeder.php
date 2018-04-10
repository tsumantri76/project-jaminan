<?php

use App\Role;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
            [
                'role'          => 'admin',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ]);
        DB::table('roles')->insert(
            [
                'role'          => 'kasir',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ]);
        DB::table('roles')->insert(
            [
                'role'          => 'unit',
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now()
            ]);
    }
}