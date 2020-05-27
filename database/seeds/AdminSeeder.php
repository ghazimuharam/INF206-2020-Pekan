<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@pekan.co.id',
            'password' => Hash::make('admin@123'),
            'phone' => '0811223344',
            'market_name'  => '-',
            'vehicle_name'  => '-',
            'vrn'  => '-',
            'mitra_status' => 'admin',
            'roles_id' => 1
        ]);
    }
}
