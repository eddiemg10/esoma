<?php

namespace Database\Seeders;

use App\Models\SubjectLevel;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        

        for($i=1; $i <= 14; $i++){

            
            SubjectLevel::insert([
                [
                    'class_level_id'=>$i,
                    'subject_name'=>'Mathematics',
                    'created_at' => now(),
                    'updated_at' => now(),
                   
                ],

                [
                    'class_level_id'=>$i,
                    'subject_name'=>'English',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],

                [
                    'class_level_id'=>$i,
                    'subject_name'=>'Kiswahili',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]);

            
        }

        for($i=9; $i <= 10; $i++){

            
            SubjectLevel::insert([
                [
                    'class_level_id'=>$i,
                    'subject_name'=>'Social Studies',
                    'created_at' => now(),
                    'updated_at' => now(),
                   
                ],

                [
                    'class_level_id'=>$i,
                    'subject_name'=>'Religious Studies',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]);

            
        }

        for($i=11; $i <= 14; $i++){

            
            SubjectLevel::insert([
                [
                    'class_level_id'=>$i,
                    'subject_name'=>'Biology',
                    'created_at' => now(),
                    'updated_at' => now(),
                   
                ],

                [
                    'class_level_id'=>$i,
                    'subject_name'=>'Physics',
                    'created_at' => now(),
                    'updated_at' => now(),
                ],

                [
                    'class_level_id'=>$i,
                    'subject_name'=>'History',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]);

            
        }
    }
}
