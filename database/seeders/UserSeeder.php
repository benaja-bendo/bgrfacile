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
        /* first user */
        $user = User::factory()->create([
            'last_name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $user->assignRole(Roles::SUPER_ADMIN);
        $user->addresses()->create([
            'street' => '1 rue de la Paix',
            'zip_code' => '75000',
            'city' => 'Paris',
            'country' => 'France',
        ]);

        /* other users */
        $users = User::factory(10)->create();
        $users->each(function ($user) {
            $user->assignRole(Roles::STUDENT);
            $user->addresses()->create([
                'street' => '1 rue de la Paix',
                'zip_code' => '75000',
                'city' => 'Paris',
                'country' => 'France',
            ]);
        });
    }
}
