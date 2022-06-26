<?php

namespace Database\Seeders;

use App\Models\FileLibLevel;
use Illuminate\Database\Seeder;

class FileUploadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FileLibLevel::insert([
            [
                'subject_id' => 1,
                'name' => 'Learn Numbers up to 5',
                'description' => 'Learn how to count to 5',
                'doc' => 'doc_1652036945.pdf',
                'premium' => 0,

            ],
            [
                'subject_id' => 1,
                'name' => 'Learn Numbers up to 10',
                'description' => 'Learn how to count to 10',
                'doc' => 'doc_1652114969.pdf',
                'premium' => 0,

            ],
            [
                'subject_id' => 1,
                'name' => 'Learn Numbers up to 20',
                'description' => 'Learn how to count to 20',
                'doc' => 'doc_1652114988.pdf',
                'premium' => 0,

            ],
            [
                'subject_id' => 43,
                'name' => 'The People of Kenya',
                'description' => 'Migration patterns and history of Kenyan communities',
                'doc' => 'doc_1652620451.pdf',
                'premium' => 0,

            ],
            [
                'subject_id' => 43,
                'name' => 'African Capital cities',
                'description' => 'Learn about the capital cities of Africa',
                'doc' => 'doc_1652193312.pdf',
                'premium' => 0,

            ],
            [
                'subject_id' => 43,
                'name' => 'Climate and Vegetation',
                'description' => 'Climate in different parts of the country',
                'doc' => 'doc_1652163649.pdf',
                'premium' => 1,

            ],
            [
                'subject_id' => 43,
                'name' => 'Arms of government',
                'description' => 'Learn about the governmental bodies in Kenya',
                'doc' => 'doc_1652118606.pdf',
                'premium' => 1,

            ]
        ]);
    }
}
