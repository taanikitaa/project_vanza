<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name'=>'vanza',
            'email'=>'riffansa13@gmail.com',
            'password'=>bcrypt('12345678')
        ]);
        $admin->assignRole('admin');

        $user = User::create([
            'name'=>'caca',
            'email'=>'salsa@gmail.com',
            'password'=>bcrypt('13062006')
        ]);
        $user->assignRole('user');
    }
}
