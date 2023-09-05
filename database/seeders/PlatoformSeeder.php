<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Models
use App\Models\PlatformModel;

class PlatoformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PlatformModel::create([
            //id => 1
            'name' => 'Master System',
            'manufacturer_id' => 1,
            'generation_id' => 3,
            'successor_id' => 2,
            'predecessor_id' => null
        ]);

        PlatformModel::create([
            //id => 2
            'name' => 'Genesis/Megadrive',
            'manufacturer_id' => 1,
            'generation_id' => 4,
            'successor_id' => 1,
            'predecessor_id' => 3
        ]);

        PlatformModel::create([
            //id => 3
            'name' => 'Saturn',
            'manufacturer_id' => 1,
            'generation_id' => 5,
            'successor_id' => 4,
            'predecessor_id' => 2
        ]);

        PlatformModel::create([
            //id => 4
            'name' => 'Dreamcast',
            'manufacturer_id' => 1,
            'generation_id' => 6,
            'successor_id' => null,
            'predecessor_id' => 5
        ]);
        //=======================================
        PlatformModel::create([
            //id => 5
            'name' => 'NES',
            'manufacturer_id' => 2,
            'generation_id' => 3,
            'successor_id' => 6,
            'predecessor_id' => null 
        ]);

        PlatformModel::create([
            //id => 6
            'name' => 'Super Nintendo SNES',
            'manufacturer_id' => 2,
            'generation_id' => 4,
            'successor_id' => 7,
            'predecessor_id' => 5
        ]);

        PlatformModel::create([
            //id => 7
            'name' => 'Nintendo 64',
            'manufacturer_id' => 2,
            'generation_id' => 5,
            'successor_id' => 8,
            'predecessor_id' => 6
        ]);

        PlatformModel::create([
            //id => 8
            'name' => 'GameCube',
            'manufacturer_id' => 2,
            'generation_id' => 6,
            'successor_id' => 9,
            'predecessor_id' => 7
        ]);

        PlatformModel::create([
            //id => 9
            'name' => 'Wii',
            'manufacturer_id' => 2,
            'generation_id' => 7,
            'successor_id' => 10,
            'predecessor_id' => 8
        ]);

        PlatformModel::create([
            //id => 10
            'name' => 'Wii U',
            'manufacturer_id' => 2,
            'generation_id' => 8,
            'successor_id' => 11,
            'predecessor_id' => 9
        ]);

        PlatformModel::create([
            //id => 11
            'name' => 'Switch',
            'manufacturer_id' => 2,
            'generation_id' => 6,
            'successor_id' => 9,
            'predecessor_id' => 7
        ]);

        //===================================================
        PlatformModel::create([
            //id => 12
            'name' => 'PlayStation',
            'manufacturer_id' => 3,
            'generation_id' => 5,
            'successor_id' => null,
            'predecessor_id' => 13
        ]);

        PlatformModel::create([
            //id => 13
            'name' => 'PlayStation 2',
            'manufacturer_id' => 3,
            'generation_id' => 6,
            'successor_id' => 14,
            'predecessor_id' => 12
        ]);

        PlatformModel::create([
            //id => 14
            'name' => 'PlayStation 3',
            'manufacturer_id' => 3,
            'generation_id' => 7,
            'successor_id' => 15,
            'predecessor_id' => 13
        ]);

        PlatformModel::create([
            //id => 15
            'name' => 'PlayStation 4',
            'manufacturer_id' => 3,
            'generation_id' => 8,
            'successor_id' => 16,
            'predecessor_id' => 14
        ]);

        PlatformModel::create([
            //id => 16
            'name' => 'PlayStation 5',
            'manufacturer_id' => 3,
            'generation_id' => 9,
            'successor_id' => null,
            'predecessor_id' => 15
        ]);

        //========================================
        PlatformModel::create([
            //id => 17
            'name' => 'Atari 2600',
            'manufacturer_id' => 4,
            'generation_id' => 2,
            'successor_id' => 18,
            'predecessor_id' => null
        ]);

        PlatformModel::create([
            //id => 18
            'name' => 'Atari Jaguar',
            'manufacturer_id' => 4,
            'generation_id' => 5,
            'successor_id' => null,
            'predecessor_id' => 17
        ]);

        //======================================
        PlatformModel::create([
            //id => 19
            'name' => 'XBOX',
            'manufacturer_id' => 5,
            'generation_id' => 6,
            'successor_id' => 20,
            'predecessor_id' => null
        ]);

        PlatformModel::create([
            //id => 20
            'name' => 'XBOX 360',
            'manufacturer_id' => 5,
            'generation_id' => 7,
            'successor_id' => 21,
            'predecessor_id' => 19
        ]);

        PlatformModel::create([
            //id => 21
            'name' => 'XBOX ONE',
            'manufacturer_id' => 5,
            'generation_id' => 8,
            'successor_id' => 22,
            'predecessor_id' => 20
        ]);

        PlatformModel::create([
            //id => 22
            'name' => 'XBOX 360',
            'manufacturer_id' => 5,
            'generation_id' => 9,
            'successor_id' => null,
            'predecessor_id' => 21
        ]);

        //===================================
        PlatformModel::create([
            //id => 23
            'name' => 'PC Engine',
            'manufacturer_id' => 6,
            'generation_id' => 4,
            'successor_id' => null,
            'predecessor_id' => null
        ]);

        //===================================
        PlatformModel::create([
            //id => 24
            'name' => '3DO',
            'manufacturer_id' => 7,
            'generation_id' => 5,
            'successor_id' => null,
            'predecessor_id' => null
        ]);
    }
}
