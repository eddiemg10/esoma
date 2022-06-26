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

        User::insert([
            [
            'firstName'=>"Collin",
            'secondName'=>"Powell",
            'email' => "admin@gmail.com",
            'email_verified_at' => now(),
            'user_type'=>'admin',
            'password' => Hash::make('password123'), // password
            'remember_token' => Str::random(10),
            'created_at' => now()
            ]
        ]);

        \App\Models\User::factory(20)->create();
        \App\Models\Teacher::factory(10)->create();
        
        

        

    }
}
