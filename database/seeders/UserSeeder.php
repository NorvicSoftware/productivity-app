<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
        
           'name'=> 'usuario regular',
            'email' => 'user@example.com',
            'email_verified_at' => '2024-04-24 20:27:33',
            'password' => bcrypt('password123'),
            'updated_at'=> '2024-04-24 20:27:33',
            'created_at' => '2024-04-24 20:27:33',
            
            
        ]);
    }
}
