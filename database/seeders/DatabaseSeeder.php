<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'CEO Credit Sales',
            'email' => 'mromerop@mrpsistemas.com',
            'password' => bcrypt('69Mh75Dm01Se06Ma'),
            'role' => 'CEO',
            'avatar' => 'user_41.png',
            'phone' => '3152579805',
            'logo' => 'logomrpsistemas.png',
        ]);
    }
}
