<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'admin_password' => '35ea0a9e3be9daaf25d46c6598826df4',
            'admin_username' => 'mohit_dhaundiyal@emtechtalks.com',
        ]);
    }
}
