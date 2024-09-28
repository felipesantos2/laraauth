<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(4)->create();

        User::factory()->create([
            'name' => 'Felipe Pinheiro',
            'email' => 'santospinheiro627@gmail.com',
            'password' => bcrypt('123456789'),
        ]);
    }
}
