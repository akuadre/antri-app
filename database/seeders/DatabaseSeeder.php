<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Owner;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(UserSeeder::class);

        Category::create([
            'name' => 'Perusahaan Bangunan',
        ]);

        Owner::create([
            'name' => 'Admin Owner',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'company_name' => 'PT Maju Mundur',
            'category_id' => 1,
            'alamat' => 'Jalan Kenangan No. 7',
            'telepon' => '08123456789',
        ]);
    }
}
