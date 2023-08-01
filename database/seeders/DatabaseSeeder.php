<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $user_ceyhun = User::factory()->create([
            'name' => 'Ceyhun',
            'email' => 'ceyhun@example.com',
        ]);

        $user_celik = User::factory()->create([
            'name' => 'Celik',
            'email' => 'celik@example.com',
        ]);

        $role_admin = Role::create(['name' => 'Admin']);

        $user_ceyhun->assignRole($role_admin);
    }
}
