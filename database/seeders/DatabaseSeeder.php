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
            SchoolSeeder::class,
            UploadeddocSeeder::class,
            SchoollevelSeeder::class,
            ClassLevelSeeder::class,
            SubjectSeeder::class,
            FileUploadSeeder::class,
            PaymentSeeder::class,
            BlogSeeder::class,
        ]);
    }
}
