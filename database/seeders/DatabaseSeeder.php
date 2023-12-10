<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\CategorySeeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call([
            RoleAndPermissionSeeder::class,
			UserSeeder::class,
			CategorySeeder::class,

		]);
        User::factory(10)->create();
        Product::factory(50)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
