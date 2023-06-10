<?php

namespace Database\Seeders;

use App\Constants\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = Roles::ALL;
        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }
    }
}
