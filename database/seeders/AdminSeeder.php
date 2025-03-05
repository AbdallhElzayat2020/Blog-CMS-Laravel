<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::updateOrCreate([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'status' => 1,
        ]);

//        $admin = new Admin();
//        $admin->name = 'admin';
//        $admin->email = 'admin@gmail.com';
//        $admin->password = bcrypt('password'); //$2y$12$kwBqEFCppgWTLWiDqbgis.7b46jb1tulES7exkh9decgfdhCB2AXG    password
//        $admin->status = 1;
//        $admin->save();

    }
}
