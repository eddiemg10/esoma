<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Classroom;
use App\Models\ClassroomStudent;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Classroom::insert([
            [
                'name'=>'Math Revision',
                'teacher'=>22,
                'access_code'=>'rcfijb',
                'description'=>'Class for KCPE math revision',
                'subject'=>'Mathematics',
                'status' => 1
            ],
            [
                'name'=>'Science Class',
                'teacher'=>22,
                'access_code'=>'cfgyui',
                'description'=>'Science class 2022',
                'subject'=>'Biology',
                'status' => 1
            ],
            [
                'name'=>'Computers',
                'teacher'=>23,
                'access_code'=>'cfgyui',
                'description'=>'Computer Studies course',
                'subject'=>'Computer Studies',
                'status' => 1
            ]
        ]);

        for($i=2; $i <=10; $i++){
            ClassroomStudent::insert([
                [
                    'user_id'=> $i,
                    'classroom_id' => 1
                ]
            ]);
        }

        for($i=2; $i <=8; $i++){
            ClassroomStudent::insert([
                [
                    'user_id'=> $i,
                    'classroom_id' => 2
                ]
            ]);
        }

        for($i=2; $i <=4; $i++){
            ClassroomStudent::insert([
                [
                    'user_id'=> $i,
                    'classroom_id' => 3
                ]
            ]);
        }
        
    }
}
