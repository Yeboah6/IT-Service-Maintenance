<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Hardware Admin',
            'email' => 'hardwareadmin@gmail.com',
            'password' => Hash::make('hardwareadmin@gmail.com')
        ]);

        // \App\Models\User::create([
        //     'name' => 'Software Admin',
        //     'email' => 'softwareadmin@gmail.com',
        //     'password' => Hash::make('softwareadmin@gmail.com')
        // ]);

        \App\Models\User::create([
            'name' => 'Network Admin',
            'email' => 'networkadmin@gmail.com',
            'password' => Hash::make('networkadmin@gmail.com')
        ]);

        \App\Models\User::create([
            'name' => 'Receptionist',
            'email' => 'receptionist@gmail.com',
            'password' => Hash::make('receptionist@gmail.com')
        ]);
    }
}
