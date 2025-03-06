<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::create([
            'make' => 'Toyota',
            'model' => 'Corolla',
            'year' => 2020,
            'miles' => 15000
        ]);

        Car::create([
            'make' => 'Honda',
            'model' => 'Civic',
            'year' => 2018,
            'miles' => 30000
        ]);

        Car::create([
            'make' => 'Ford',
            'model' => 'Focus',
            'year' => 2021,
            'miles' => 5000
        ]);
    }
}
