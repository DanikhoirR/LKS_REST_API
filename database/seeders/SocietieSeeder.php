<?php

namespace Database\Seeders;

use App\Models\Societie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SocietieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Societie::create([
            'id_card_number' => '1001',
            'password' => Hash::make('123456'),
            'name' => 'John Doe',
            'born' => '1990-01-01',
            'gender' => 'male',
            'address' => '123 Main St',
            'regional_id' => 1,
            'login_tokens' => '',
        ]);
    }
}
