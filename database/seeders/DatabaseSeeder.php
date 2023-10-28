<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin = \App\Models\User::factory(1)->create([
            'name' => 'Robert',
            'email' => 'example@example.com',
        ]);
        \App\Models\User::factory(10)->create();
        \App\Models\Admin::factory(1)->create([
            'user_id' => $admin->value('id'),
        ]);

        \App\Models\Menu::factory(3)->create();
    }
}
