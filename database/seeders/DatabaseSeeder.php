<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\News;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        $user = User::factory()->create([
            'name' => 'The Admin',
            'contact_no' => '1234567890',
            'email' => 'admin@email.com',
            'password' => bcrypt('passwordniadmin'),
            'roles' => 'admin',
        ]);

        News::factory(20)->create([
            'user_id' => $user->id
        ]);
    }
}
