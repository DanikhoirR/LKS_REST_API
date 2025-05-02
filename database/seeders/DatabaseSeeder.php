<?php

namespace Database\Seeders;

use App\Models\Medical;
use App\Models\Regional;
use App\Models\Spot;
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

        User::factory(10)->create();

        foreach ($listVaccine as $key => $value) {
            Vaccine::create($value);
        };

        foreach ($listRegional as $key => $value) {
            Regional::create($value);
        };

        $regionals = Regional::all();
        foreach ($regionals as $regional) {
            for ($i = 1; $i <= 5; $i++) {
                Spot::create([
                    'regional_id' => $regional->id,
                    'name' => 'spot' . ' ' . $regional->district,
                    'address' => 'Jl. Raya No. ' . $i,
                    'serve' => 0,
                    'capacity' => rand(50, 100),
                ]);
            };
        };

        $spots = Spot::all();
        $users = User::all();
        for ($i = 1; $i <= count($users); $i++) {
            foreach ($users as $user) {
                $user_id = $user->id;
                for ($i = 1; $i <= count($spots); $i++) {
                    foreach ($spots as $spot) {
                        $spot_id = $spot->id;
                        Medical::create([
                            'spot_id' => $spot_id,
                            'user_id' => $user_id,
                            'name' => $user->username,
                        ]);
                    }
                }
            }
        }
    }
}
