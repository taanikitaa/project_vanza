<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name'=>'Vanza',
            'email'=>'riffansa13@gmail.com',
            'password'=> bcrypt('12345678')
        ]);

        $admin->assignRole('admin');


        $user = User::create([
        'name'=>'caca',
        'email'=>'caca@gmail.com',
        'password'=> bcrypt('13062006')
    ]);

    $user->assignRole('user');

}
}