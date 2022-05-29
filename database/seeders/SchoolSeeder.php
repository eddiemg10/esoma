<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\School;
use App\Models\SchoolClassroom;
use App\Models\SchoolTeacher;




class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        School::insert([
            [
                'name'=>'Test School',
                'user_id'=>'1',
            ]
            ]);

        SchoolClassroom::insert([
            [
            'classroom_id' => '1',
            'school_id' => '1'
            ],
            [
            'classroom_id' => '2',
            'school_id' => '1'
            ],
            [
            'classroom_id' => '3',
            'school_id' => '1'
            ],

        ]);

        SchoolTeacher::insert([
            [
            'user_id' => '11',
            'school_id' => '1'
            ],
            [
            'user_id' => '12',
            'school_id' => '1'
            ],
            [
            'user_id' => '13',
            'school_id' => '1'
            ],

        ]);
    }
}
