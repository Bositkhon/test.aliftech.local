<?php

use App\Cell;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class FolderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cells = Cell::all();

        foreach ($cells as $cell) {
            $folders = [];

            for ($i = 1; $i <= 1; $i++) {
                $folders[] = ['id' => Str::random(5)];
            }

            $cell->folders()->createMany($folders);
        }
    }
}
