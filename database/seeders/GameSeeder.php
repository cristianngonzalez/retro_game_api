<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Models
use App\Models\GameModel;
class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        GameModel::create([
            'name' => 'Super Mario Bros.',
            'description' => 'Super Mario Bros. is a platform game developed and published by Nintendo. The successor to the 1983 arcade game, Mario Bros., and the first in the Super Mario series of platformers, it was released in Japan in 1985 for the Famicom, and in North America and Europe for the Nintendo Entertainment System (NES) in 1985 and 1987 respectively. Players control Mario, or his brother Luigi in the multiplayer mode, as they travel the Mushroom Kingdom to rescue Princess Toadstool from the antagonist, Bowser. They must traverse side-scrolling stages while avoiding hazards such as enemies and pits with the aid of power-ups such as the Super Mushroom, Fire Flower and Starman.',
            'download_link' => 'https://www.emulatorgames.net/roms/nintendo/super-mario-bros/',
            'release_date' => '1985-09-13',
            'publisher_id' => 1,
            'cover' => 'https://www.mariowiki.com/images/thumb/9/99/Super_Mario_Bros._box.png/1200px-Super_Mario_Bros._box.png',
            'genre_id' => 1,
            'platform_id' => 1
        ]);

        GameModel::create([
            'name' => 'Super Mario Bros. 2',
            'description' => 'Super Mario Bros. 2 is a platform game developed and published by Nintendo for the Nintendo Entertainment System. The game was first released in North America in October 1988, and in the PAL region the following year. It has been remade or re-released for several video game consoles.',
            'download_link' => 'https://www.emulatorgames.net/roms/nintendo/super-mario-bros-2/',
            'release_date' => '1988-10-09',
            'publisher_id' => 1,
            'cover' => 'https://www.mariowiki.com/images/thumb/9/9c/Super_Mario_Bros._2_box.png/1200px-Super_Mario_Bros._2_box.png',
            'genre_id' => 1,
            'platform_id' => 1  
        ]);
    }
}