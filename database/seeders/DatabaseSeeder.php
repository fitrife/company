<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        User::create([
            'name' => 'User',
            'username' => 'useraccount',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user1234'),
            'is_admin'  => '1',
            'status' => '1'
        ]);
    }

    
}
