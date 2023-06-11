<?php

namespace Database\Seeders;

use App\Constants\Roles;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'last_name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $user->assignRole(Roles::SUPER_ADMIN);

        $users = User::factory(10)->create();
        $users->each(function ($user) {
            $user->assignRole(Roles::STUDENT);
        });
    }
}
