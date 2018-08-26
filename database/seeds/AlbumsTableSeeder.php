<?php

use Illuminate\Database\Seeder;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $albums = [
            [
                "name" => "V-pop",
                "description" => "Vietnamese pop",
                "cover" => "vpop.png",
            ],
            [
                "name" => "C-pop",
                "description" => "Chinese pop",
                "cover" => "cpop.png",
            ],
            [
                "name" => "K-pop",
                "description" => "Korean pop",
                "cover" => "kpop.png",
            ],
            [
                "name" => "J-pop",
                "description" => "Japanese pop",
                "cover" => "jpop.png",
            ],
        ];

        echo "Creating sample data for albums table..." . PHP_EOL;

        foreach ($albums as $album) {
            \App\Models\Album::create($album);
            echo sprintf("Album %s created!%s", $album["name"], PHP_EOL);
        }

        echo "Done!" . PHP_EOL;
    }
}
