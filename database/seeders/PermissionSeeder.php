<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\permissions;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $create = permissions::create([
            'permission' => 'Create'
        ]);
        $create->roles()->attach([1,2]);

        $read = permissions::create([
            'permission' => 'Read'
        ]);
        $read->roles()->attach([1,2,3]);

        $update = permissions::create([
            'permission' => 'Update'
        ]);
        $update->roles()->attach([1,2]);

        $delete = permissions::create([
            'permission' => 'Delete'
        ]);
        $delete->roles()->attach(1);
    }
}
