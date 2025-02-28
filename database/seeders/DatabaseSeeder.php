<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

final class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create(
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );

        $this->call([
            MetaKeyWordsSeeder::class,
            AttributeSeeder::class,
            CategorySeeder::class,
            DoorSeeder::class,
            AdditionalAttributeSeeder::class,
            BlogSeeder::class,
        ]);

    }
}
