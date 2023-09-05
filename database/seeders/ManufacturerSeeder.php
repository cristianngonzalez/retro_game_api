<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Models
use App\Models\ManufacturerModel;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ManufacturerModel::create([
            //id => 1
            'name' => 'Sega',
            'country' => 'Japan'
        ]);

        ManufacturerModel::create([
            //id => 2
            'name' => 'Nintendo',
            'country' => 'Japan'
        ]);

        ManufacturerModel::create([
            //id => 3
            'name' => 'Sony',
            'country' => 'Japan'
        ]);

        ManufacturerModel::create([
            //id => 4
            'name' => 'Atari',
            'country' => 'United States'
        ]);

        ManufacturerModel::create([
            //id => 5
            'name' => 'Microsoft',
            'country' => 'United States'
        ]);

        ManufacturerModel::create([
            //id => 6
            'name' => 'Nec',
            'country' => 'Japan'
        ]);

        ManufacturerModel::create([
            //id => 7
            'name' => 'Real Interactive',
            'country' => 'United States'
        ]);
    }
}
