<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use App\Models\RoleType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::factory(100)->create();
        RoleType::factory(100)->create();


        User::factory(100)->create();

        $admin = Role::factory()->create([
            'name' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ])->assignRole($admin);
    }
}
