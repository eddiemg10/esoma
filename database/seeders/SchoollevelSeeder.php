<?php

namespace Database\Seeders;

use App\Models\SchoolLevel;
use Illuminate\Database\Seeder;

class SchoollevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SchoolLevel::insert([
            [
                'schoollevel_name'=>'school1',
               
            ],
            [
                'schoollevel_name'=>'school2',
            ]
            ]);
    }
}
