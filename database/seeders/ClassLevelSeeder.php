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

        for($i=1; $i <= 2; $i++){

            
            ClassLevel::insert([
                [
                    'school_level_id'=>'1',
                    'classlevel_name'=>'PP '.$i,
                   
                ]]);
        }

        for($i=3; $i <= 8; $i++){

            
            ClassLevel::insert([
                [
                    'school_level_id'=>'2',
                    'classlevel_name'=>'Grade '.($i-2),
                   
                ]]);
        }

        for($i=9; $i <= 10; $i++){

            
            ClassLevel::insert([
                [
                    'school_level_id'=>'2',
                    'classlevel_name'=>'Class '.($i-2),
                   
                ]]);
        }

        for($i=1; $i <= 4; $i++){

            
            ClassLevel::insert([
                [
                    'school_level_id'=>'3',
                    'classlevel_name'=>'Form '.$i,
                   
                ]]);
        }

    }
}
