<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test Seller',
            'email' => 'seller@example.com',
            'password' => bcrypt('12345'),
            'role' => 'seller'
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Test Buyer',
            'email' => 'buyer@example.com',
            'password' => bcrypt('12345'),
            'role' => 'buyer'
        ]);
    }
}
