<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Models
use App\Models\GenerationModel;

class GenerationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        GenerationModel::create([
            'name' => 'First Generation',
            'description' => 'The first generation of video game consoles lasted from 1972 until 1977. The first generation began with Magnavox Odyssey, released in 1972, and ended with the launch of Atari 2600 in 1977. The first generation is also called the 8-bit era, since the processors of the consoles were 8-bit.',
            'start_date' => '1972-01-01',
            'end_date' => '1977-12-31',
            'current' => false
        ]);

        GenerationModel::create([
            'name' => 'Second Generation',
            'description' => 'The second generation of video game consoles lasted from 1976 until 1992. The second generation began with Fairchild Channel F, released in 1976, and ended with the launch of Neo Geo AES in 1990. The second generation is also called the 8-bit era, since the processors of the consoles were 8-bit.',
            'start_date' => '1976-01-01',
            'end_date' => '1992-12-31',
            'current' => false
        ]);

        GenerationModel::create([
            'name' => 'Third Generation',
            'description' => 'The third generation of video game consoles lasted from 1983 until 2003. The third generation began with Nintendo Entertainment System, released in 1983, and ended with the launch of Nintendo GameCube in 2003. The third generation is also called the 8-bit era, since the processors of the consoles were 8-bit.',
            'start_date' => '1983-01-01',
            'end_date' => '2003-12-31',
            'current' => false
        ]);

        GenerationModel::create([
            'name' => 'Fourth Generation',
            'description' => 'The fourth generation of video game consoles lasted from 1987 until 2004. The fourth generation began with NEC TurboGrafx-16, released in 1987, and ended with the launch of Sony PlayStation 2 in 2004. The fourth generation is also called the 16-bit era, since the processors of the consoles were 16-bit.',
            'start_date' => '1987-01-01',
            'end_date' => '2004-12-31',
            'current' => false
        ]);

        GenerationModel::create([
            'name' => 'Fifth Generation',
            'description' => 'The fifth generation of video game consoles lasted from 1993 until 2006. The fifth generation began with 3DO Interactive Multiplayer, released in 1993, and ended with the launch of Xbox 360 in 2006. The fifth generation is also called the 32/64-bit era, since the processors of the consoles were 32/64-bit.',
            'start_date' => '1993-01-01',
            'end_date' => '2006-12-31',
            'current' => false
        ]);

        GenerationModel::create([
            'name' => 'Sixth Generation',
            'description' => 'The sixth generation of video game consoles lasted from 1998 until 2013. The sixth generation began with Sega Dreamcast, released in 1998, and ended with the launch of Nintendo Wii U in 2013. The sixth generation is also called the 128-bit era, since the processors of the consoles were 128-bit.',
            'start_date' => '1998-01-01',
            'end_date' => '2013-12-31',
            'current' => false
        ]);

        GenerationModel::create([
            'name' => 'Seventh Generation',
            'description' => 'The seventh generation of video game consoles lasted from 2005 until 2017. The seventh generation began with Microsoft Xbox 360, released in 2005, and ended with the launch of Nintendo Switch in 2017. The seventh generation is also called the 128-bit era, since the processors of the consoles were 128-bit.',
            'start_date' => '2005-01-01',
            'end_date' => '2017-12-31',
            'current' => false
        ]);

        GenerationModel::create([
            'name' => 'Eighth Generation',
            'description' => 'The eighth generation of video game consoles lasted from 2012 until 2020. The eighth generation began with Nintendo Wii U, released in 2012, and ended with the launch of Sony PlayStation 5 in 2020. The eighth generation is also called the 128-bit era, since the processors of the consoles were 128-bit.',
            'start_date' => '2012-01-01',
            'end_date' => '2020-12-31',
            'current' => false
        ]);

    }
}
