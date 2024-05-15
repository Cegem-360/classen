<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            MetaKeyWordsSeeder::class,
            AttributeSeeder::class,
            CategorySeeder::class,
            DoorSeeder::class,
            AdditionalAttributeSeeder::class,

        ]);

    }
}
