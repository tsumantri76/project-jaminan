<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(ProfitsTableSeeder::class);
        // $this->call(RekeningsTableSeeder::class);
        // $this->call(BandaraTableSeeder::class);
        // $this->call(BanksTableSeeder::class);
        $this->call(RolesTableSeeder::class);
    }
}
