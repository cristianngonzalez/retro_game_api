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
            'name' => 'Nintendo Entertainment System',
            'description' => 'The Nintendo Entertainment System (NES) is an 8-bit third-generation home video game console produced by Nintendo. Nintendo first released it in Japan as the Family Computer, commonly known as the Famicom, in 1983. The NES, a remodelled version, was released internationally in the following years.',
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/NES_logo.svg/1200px-NES_logo.svg.png',
            'release_date' => '1983-07-15',
            'discontinued_date' => '2003-09-25',
            'manufacturer_id' => 1,
            'generation_id' => 3,
            'successor_id' => null,
            'predecessor_id' => null
        ]);
    }
}
