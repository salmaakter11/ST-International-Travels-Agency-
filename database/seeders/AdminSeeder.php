<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('admins')->insert([
            'name' =>"Super Admin",
            'email' => "admin@itsheba24.com",
            'status' => "1",
            'admin_type' => "5",
            'role' => "5",
            'password' => Hash::make('password'),
        ]);
    }
}
