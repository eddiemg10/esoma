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
                'schoollevel_name'=>'Kids Learning',
               
            ],
            [
                'schoollevel_name'=>'Primary School',
            ],
            [
                'schoollevel_name'=>'Secondary School',
            ],
          
            ]);
    }
}
