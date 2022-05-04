<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Classroom;
use App\Models\ClassroomStudent;
use App\Models\Teacher;
use App\Models\Assignment;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i=0; $i<5; $i++){
            User::create([
                'email' => Str::random(7).'@gmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
            ]);

            
        }

        Teacher::create([
            'user_id' => 1,
            'name'=>'Mr. James Smith',
            'tsc_number' => 10926,
        ]);

        for($i=0; $i<4; $i++){
            Classroom::create([
                'name'=>"Random Class ".Str::random(3),
                'teacher' => 1,
                'access_code' => Str::random(6),
                'description' => 'This is a dummy class and has no description',
                'status' => 1,
            ]);

            ClassroomStudent::create([
                'user_id'=> 2,
                'classroom_id' => $i+1,
            ]);

            
        }

        for($i=0; $i < 2; $i++){
            Assignment::create([
                'classroom_id' => 1,
                'due_date'=> now(),
                'total_marks' => 30
            ]);
        }
    }
}
