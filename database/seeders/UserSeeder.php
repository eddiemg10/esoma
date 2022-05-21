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
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Schema;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Teacher::truncate();
        Classroom::truncate();
        Schema::enableForeignKeyConstraints();

        \App\Models\User::factory(10)->create();
        \App\Models\Teacher::factory(10)->create();
        
        

        for($i=0; $i<4; $i++){
            Classroom::create([
                'name'=>"Random Class ".Str::random(3),
                'teacher' => 11,
                'access_code' => Str::random(6),
                'description' => 'This is a dummy class and has no description',
                'status' => 1,
            ]);

            ClassroomStudent::create([
                'user_id'=> 2,
                'classroom_id' => $i+1,
            ]);

            
        }

    }
}
