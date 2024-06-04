<?php

namespace Database\Seeders;

use App\Models\Value;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Value::create([
            'attribute_id' => 1,
            "name" => [
                "uz" => "Qizil",
                "ru" => "Красный",
            ]
        ]);
        Value::create([
            'attribute_id' => 1,
            "name" => [
                "uz" => "Qora",
                "ru" => "Чёрный",
            ]
        ]);
        Value::create([
            'attribute_id' => 1,
            "name" => [
                "uz" => "Oq",
                "ru" => "Белый",
            ]
        ]);
        Value::create([
            'attribute_id' => 3,
            "name" => [
                "uz" => "MDF",
                "ru" => "МДФ",
            ]
        ]);
        Value::create([
            'attribute_id' => 3,
            "name" => [
                "uz" => "LCDF",
                "ru" => "ЛСДФ",
            ]
        ]);
        Value::create([
            'attribute_id' => 3,
            "name" => [
                "uz" => "GIPS",
                "ru" => "ГИПС",
            ]
        ]);
        Value::create([
            'attribute_id' => 2,
            "name" => [
                "uz" => "M",
                "ru" => "МИ",
            ]
        ]);
        Value::create([
            'attribute_id' => 2,
            "name" => [
                "uz" => "L",
                "ru" => "Л",
            ]
        ]);
        Value::create([
            'attribute_id' => 2,
            "name" => [
                "uz" => "XL",
                "ru" => "ХЛ",
            ]
        ]);
    }
}
