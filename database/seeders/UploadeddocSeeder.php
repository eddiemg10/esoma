<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Uploadeddoc;


class UploadeddocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Uploadeddoc::insert([
            [
                'name'=>'Lab Manual',
                'classroom_id'=>'1',
                'doc'=>'doc_1652639177.pdf',
            ],
            [
                'name'=>'Operation Research',
                'classroom_id'=>'1',
                'doc'=>'doc_1652638712.pdf',
            ],
            [
                'name'=>'Semester assignment',
                'classroom_id'=>'1',
                'doc'=>'doc_1653154207.pdf',
            ]
            ]);
    }
    
}
