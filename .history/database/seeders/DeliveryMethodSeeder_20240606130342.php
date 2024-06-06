<?php

namespace Database\Seeders;

use App\Models\DeliveryMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeliveryMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DeliveryMethod::create([
        'name' => [
            'uz' => 'Tekin',
            'ru' => 'Безплатно',
        ],
        'estimated_time' => json_encode([
            'uz' => '5 kun',
            'ru' => 'ru 5 kun',
        ]),
        'sum' => 0,
   ]);
   DeliveryMethod::create([
        'name' => [
            'uz' => 'Standart',
            'ru' => 'ru Standart',
        ],
        'estimated_time' => json_encode([
            'uz' => '2 kun',
            'ru' => 'ru 2 kun',
        ]),
        'sum' => 30000,
   ]);
   DeliveryMethod::create([
        'name' => [
            'uz' => 'Premium',
            'ru' => 'ru Premium',
        ],
        'estimated_time' => json_encode([
            'uz' => '1 kun',
            'ru' => 'ru 1 kun',
        ]),
        'sum' => 50000,
   ]);
    }
}
