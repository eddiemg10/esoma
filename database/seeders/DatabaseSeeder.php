<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            UserSeeder::class,
            ClassroomSeeder::class,
            UploadeddocSeeder::class,
            SchoolSeeder::class,
            SchoollevelSeeder::class,
            PaymentSeeder::class,
        ]);
    }
}
