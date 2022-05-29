<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Classroom;

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
                'name'=>'MSB 6',
                'teacher'=>'11',
                'access_code'=>'rcfijb',
                'description'=>'Masomo muhimu',
                'subject'=>'Catology',
            ],
            [
                'name'=>'Shabba',
                'teacher'=>'11',
                'access_code'=>'cfgyui',
                'description'=>'abc',
                'subject'=>'Biology',
            ]
            ]);
    }
}
