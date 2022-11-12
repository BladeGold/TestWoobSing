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
        $superadmin = User::create([
            'name' => 'SuperAdmin' ,
            'last_name' => 'Demo',
            'email' => 'superadmin@mail.com',
            'password' => bcrypt('qwerty'),
            'phone' => '123456789',
        ]);
        $superadmin->roles()->attach(1);

        $admin = User::create([
            'name' => 'Admin' ,
            'last_name' => 'Demo',
            'email' => 'admin@mail.com',
            'password' => bcrypt('qwerty'),
            'phone' => '123456789',
        ]);
        $admin->roles()->attach(2);

        for ($i=1 ; $i <= 3 ; $i++ ) { 
            $user[$i] = User::create([
                'name' => 'User'.$i,
                'last_name' => 'Demo',
                'email' => 'User'.$i.'@mail.com',
                'password' => bcrypt('qwerty'),
                'phone' => '123456789',
            ]);

            $user[$i]->roles()->attach(3);
        }
    }
}
