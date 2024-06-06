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
            'nema' => [
                'uz' => 'Tekin',
                'ru' => 'Безплатно',
            ],
            'estimated_time' => [
                'uz' => '2 kun',
                'ru' => 'ru 2kun',
            ]
       ]);
    }
}
