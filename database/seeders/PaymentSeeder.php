<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for($i=0; $i<6; $i++){
            Payment::insert([
                "amount" => 50.00,
                "access_code" => Str::random(9),
                "created_at" => now(),
                "updated_at" => now(),
            ]);
        }

        for($i=0; $i<3; $i++){
            Payment::insert([
                "amount" => 200.00,
                "access_code" => Str::random(9),
                "created_at" => now(),
                "updated_at" => now(),

            ]);
        }
        
    }
}
