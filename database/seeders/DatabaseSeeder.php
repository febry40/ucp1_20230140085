<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Todo;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
{
    // 1 admin
    User::create([
        'name' => 'Admin',
        'email' => 'admin@gmail.com',
        'password' => bcrypt('password'),
        'is_admin' => true
    ]);

    // 100 user random
    User::factory(100)->create();

    // minimal 500 todo
    Todo::factory(500)->create();
}
}
