<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',           
            'email' => 'admin@mail.ru',            
            'password' => Hash::make('secret'),
        ]);
        $admin->roles()->attach(1);
        User::factory()->count(10)->hasAttached(Role::find(3))->create();
    }
}
