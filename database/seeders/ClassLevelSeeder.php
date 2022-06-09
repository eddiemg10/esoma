<?php

namespace Database\Seeders;
use App\Models\ClassLevel;

use Illuminate\Database\Seeder;

class ClassLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClassLevel::insert([
            [
                'school_level_id'=>'9',
                'classlevel_name'=>'Grade1',
               
            ],
            [
                'school_level_id'=>'10',
                'classlevel_name'=>'Grade1',

            ]
            ]);
    }
}
