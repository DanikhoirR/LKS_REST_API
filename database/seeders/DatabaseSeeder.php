<?php

namespace Database\Seeders;

use App\Models\Regional;
use App\Models\User;
use App\Models\Vaccine;
use Attribute;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $listVaccine = [
            [
                'name' => 'AstraZeneca'
            ],
            [
                'name' => 'Modena'
            ]
        ];

        $listRegional = [
            [
                'province' => 'DKI Jakarta',
                'district' => 'Jakarta Selatan'
            ],
            [
                'province' => 'DKI Jakarta',
                'district' => 'Jakarta Pusat'
            ],
            [
                'province' => 'DKI Jakarta',
                'district' => 'Jakarta Barat'
            ],
            [
                'province' => 'DKI Jakarta',
                'district' => 'Jakarta Timur'
            ],
            [
                'province' => 'DKI Jakarta',
                'district' => 'Jakarta Utara'
            ]
        ];

        User::create([
            'username' => 'Dane Khoir',
            'password' => Hash::make('password'),
        ]);

        foreach ($listVaccine as $key => $value) {
            Vaccine::create($value);
        };

        foreach ($listRegional as $key => $value) {
            Regional::create($value);
        };
    }
}
