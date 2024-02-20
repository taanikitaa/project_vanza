<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Check if the role already exists
        //  if (!Role::where('name', 'admin')->exists()) {
            // If not, create the role
            Role::create([
                'name' => 'admin',
                'guard_name' => 'web'
            ]);

        Role::create([
            'name' => 'user',
            'guard_name' => 'web'
        ]);
     }
   }
// }