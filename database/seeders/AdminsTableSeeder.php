<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\admin;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = Hash::make('123456');
        $adminRecords = [
            ['id' => 1, 'name' => 'admin', 'type' => 'admin', 'mobile' => 01233441132, 'email' => 'admin@gmail.com', 'password' => $password, 'image' => '', 'status' => 1],
        ];
        admin::insert($adminRecords);
    }
}
